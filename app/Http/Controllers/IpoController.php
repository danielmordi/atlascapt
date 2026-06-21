<?php

namespace App\Http\Controllers;

use App\Models\Ipo;
use App\Models\UserIpo;
use App\Models\TransactionHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IpoController extends Controller
{
    /**
     * Admin: Display a listing of IPOs.
     */
    public function index()
    {
        $ipos = Ipo::latest()->get();
        return view('admin.ipo')->with('ipos', $ipos);
    }

    /**
     * Admin: Store a newly created IPO.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'symbol' => 'required|string|max:10',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'min_purchase' => 'required|integer|min:1',
        ]);

        $ipo = Ipo::create([
            'name' => $request->name,
            'symbol' => $request->symbol,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'available_quantity' => $request->quantity,
            'min_purchase' => $request->min_purchase,
            'max_purchase' => $request->max_purchase,
            'status' => $request->status ?? 'active',
        ]);

        return redirect()->back()->with('success', 'IPO created successfully.');
    }

    /**
     * Admin: Show the form for editing the specified IPO.
     */
    public function edit($id)
    {
        $ipo = Ipo::findOrFail($id);
        $ipos = Ipo::latest()->get();
        return view('admin.ipo', compact('ipo', 'ipos'));
    }

    /**
     * Admin: Update the specified IPO.
     */
    public function update(Request $request, $id)
    {
        $ipo = Ipo::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'symbol' => 'required|string|max:10',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
        ]);

        $ipo->update([
            'name' => $request->name,
            'symbol' => $request->symbol,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'available_quantity' => $request->available_quantity ?? $request->quantity,
            'min_purchase' => $request->min_purchase,
            'max_purchase' => $request->max_purchase,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.ipos.index')->with('success', 'IPO updated successfully.');
    }

    /**
     * Admin: Remove the specified IPO.
     */
    public function destroy($id)
    {
        $ipo = Ipo::findOrFail($id);
        $ipo->delete();

        return redirect()->back()->with('success', 'IPO deleted successfully.');
    }

    /**
     * User: Display available IPOs.
     */
    public function userIndex()
    {
        $ipos = Ipo::where('status', 'active')
                ->oRwhere('status', 'upcoming')
                ->where('available_quantity', '>', 0)
                ->latest()
                ->get();
        return view('user.ipo')->with('ipos', $ipos);
    }

    /**
     * User: Display purchased IPOs.
     */
    public function userPurchased()
    {
        $myIpos = UserIpo::where('user_id', Auth::id())->with('ipo')->latest()->paginate(10);
        return view('user.my-ipo', compact('myIpos'));
    }

    /**
     * User: Purchase an IPO.
     */
    public function purchase(Request $request)
    {
        $request->validate([
            'ipo_id' => 'required|exists:ipos,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $ipo = Ipo::findOrFail($request->ipo_id);
        $user = Auth::user();
        $totalCost = $ipo->price * $request->quantity;

        // Validations
        if ($ipo->status !== 'active' && $ipo->status !== 'upcoming') {
            return redirect()->back()->with('error', 'This IPO is no longer active or available for purchase.');
        }

        if ($request->quantity > $ipo->available_quantity) {
            return redirect()->back()->with('error', 'Requested quantity exceeds available shares.');
        }

        if ($request->quantity < $ipo->min_purchase) {
            return redirect()->back()->with('error', 'Minimum purchase is ' . $ipo->min_purchase . ' shares.');
        }

        if ($ipo->max_purchase && $request->quantity > $ipo->max_purchase) {
            return redirect()->back()->with('error', 'Maximum purchase is ' . $ipo->max_purchase . ' shares.');
        }

        $depositBalance = floatval(preg_replace("/[^0-9.]/", "", $user->deposit));
        if ($depositBalance < $totalCost) {
            return redirect()->back()->with('error', 'Insufficient funds. Click on "Deposit" to fund your account.');
        }

        DB::beginTransaction();
        try {
            // Deduct balance
            $user->deposit = $depositBalance - $totalCost;
            $user->save();

            // Create purchase record
            UserIpo::create([
                'user_id' => $user->id,
                'ipo_id' => $ipo->id,
                'quantity' => $request->quantity,
                'purchase_price' => $ipo->price,
                'total_amount' => $totalCost,
                'status' => 'active',
            ]);

            // Update IPO available quantity
            $ipo->available_quantity -= $request->quantity;
            if ($ipo->available_quantity <= 0) {
                $ipo->status = 'closed';
            }
            $ipo->save();

            // Record transaction
            TransactionHistory::create([
                'user_id' => $user->id,
                'type' => 'IPO Purchase',
                'description' => "Purchased {$request->quantity} shares of {$ipo->name} ({$ipo->symbol})",
                'amount' => $totalCost,
                'status' => 'completed',
            ]);

            DB::commit();
            return redirect()->route('user.ipos.purchased')->with('success', 'Purchase successful!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
