<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function index()
    {
        $coins = Coin::get();
        return view('admin.coin')->with([
            'coins' => $coins
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:coins',
            'wallet_id' => 'required'
        ]);

        $coin = new Coin;
        $coin->name = $request->input('name');
        $coin->wallet_id = $request->input('wallet_id');
        $coin->save();

        return redirect()->back()->with('success', $coin->name . ' was added successfully!');
    }

    public function edit($id)
    {
        $coins = Coin::find($id);
        return view('admin.coin')->with('coin', $coins);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'unique:coins'
        ]);

        $coin = Coin::find($id);
        $coin->name = $request->input('name');
        $coin->wallet_id = $request->input('wallet_id');
        $coin->save();

        return redirect('admin/coin')->with('success', $coin->name . ' has been updated successfully');
    }

    public function destroy($id)
    {
        Coin::destroy($id);

        return redirect('admin/coin')->with('success', 'Coin has been deleted successfully!');
    }
}
