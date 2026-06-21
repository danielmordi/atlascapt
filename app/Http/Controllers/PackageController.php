<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Package;
use App\Models\Deposit;
use App\Models\UserPlan;
use App\Models\TransactionHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::get();
        $coins = Coin::get();
        return view('admin.packages')->with([
            'packages' => $packages,
            'coins' => $coins
        ]);
    }

    public function packageView()
    {
        $pckg = Package::get();
        return view('user.mining')->with('packages', $pckg);
    }

    public function myPlans()
    {
        $plans = UserPlan::where('user_id', Auth::user()->id)
            ->latest()
            ->paginate(10);
            
        return view('user.my-plans', compact('plans'));
    }

    public function planDetails($id)
    {
        $plan = UserPlan::where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->with('package')
            ->firstOrFail();

        $roiHistory = TransactionHistory::where('user_id', Auth::user()->id)
            ->where('user_plan_id', $id)
            ->where('type', 'ROI')
            ->latest()
            ->paginate(10);

        return view('user.plan-details', compact('plan', 'roiHistory'));
    }

    public function store(Request $request)
    {
        //        dd($request->all());
        $validator = $request->validate([
            'pckg_name' => 'required|unique:packages,name|max:255',
        ]);

        // to store btc as 0.0004667 * 100000000 = 46670
        $minVal = $request->input('pckg_min_val');
        $maxVal = $request->input('pckg_max_val');

        if ($minVal > $maxVal) {
            return redirect()->back()->withError('Minimum value must be greater than or equal to maximum value');
        }

        $packages = new Package;
        $packages->name = $request->input('pckg_name');
        $packages->hash_rate = $request->input('hashrate');
        $packages->percentage = $request->input('pckg_%');
        $packages->min_val = $minVal;
        $packages->max_val = $maxVal;
        $packages->duration = $request->input('duration');
        $packages->save();

        return redirect()->back()->with('success', $packages->name . ' was added successfully!');
    }

    public function edit($id)
    {
        $package = Package::find($id);
        return view('admin.packages')->with('package', $package);
    }

    public function update(Request $request, $id)
    {
        $updatePackage = Package::find($id);

        $minVal = $request->input('pckg_min_val');
        $maxVal = $request->input('pckg_max_val');

        if ($minVal > $maxVal) {
            return redirect()->back()->withError('Minimum value must be greater than or equal to maximum value');
        }

        $updatePackage->name = $request->input('pckg_name');
        $updatePackage->hash_rate = $request->input('hashrate');
        $updatePackage->percentage = $request->input('pckg_%');
        $updatePackage->min_val = $minVal;
        $updatePackage->max_val = $maxVal;
        $updatePackage->duration = $request->input('duration');
        $updatePackage->save();

        return redirect('admin/packages')->with('success', $updatePackage->name . ' has been updated successfully');
    }

    public function destroy($id)
    {
        // $deletePackage = Package::destroy($id);
        // return redirect('admin/packages')->with('success', 'Package has been deleted successfully!');

        try {
            // Start a database transaction
            DB::beginTransaction();

            // Find the package
            $package = Package::find($id);

            if (!$package) {
                return redirect('admin/packages')->with([
                    'status' => 'Package not found',
                ]);
            }

            // Set package_id to null
            $package->user()->update(['package_id' => null]);
            // Delete the package
            $package->delete();

            // Commit the transaction
            DB::commit();

            return redirect('admin/packages')->with([
                'status' => 'Package was successfully deleted',
            ]);
        } catch (\Exception $e) {
            // An error occurred, rollback the transaction
            DB::rollBack();

            return redirect('admin/packages')->with([
                'status' => 'Error deleting package: ' . $e->getMessage(),
            ]);
        }
    }
}
