<?php

namespace Database\Seeders;

use App\Models\Coin;
use Illuminate\Database\Seeder;

class CoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coins = [
            [
                'name' => 'Bitcoin',
                'wallet_id' => '1BvBMSEYstWetqTFn5Au4m4GFg7xJaNVN2',
            ],
            [
                'name' => 'Ethereum',
                'wallet_id' => '0xde0B295669a9FD93d5F28D9Ec85E40f4cb697BAe',
            ],
            [
                'name' => 'USDT (TRC20)',
                'wallet_id' => 'TR7NHqfZSSj2L83AL6HL6DHScy7BW3C67',
            ],
            [
                'name' => 'Litecoin',
                'wallet_id' => 'Lbc66qM6n7y2M6C6T6L6L6L6L6L6L6L6',
            ],
        ];

        foreach ($coins as $coin) {
            Coin::updateOrCreate(['name' => $coin['name']], $coin);
        }
    }
}
