<?php

namespace Database\Seeders;

use App\Models\CopyTrader;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CopyTraderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        CopyTrader::truncate();
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        for ($i = 0; $i < 8; $i++) {
            CopyTrader::create([
                'username' => $faker->userName(),
                'avatar' => $faker->imageUrl(200, 200, 'people', true),
                'location' => $faker->city(),
                'mininum_capital' => $faker->numberBetween(100, 10000),
                'risk_level' => $faker->randomElement(['Low', 'Medium', 'High']),
                'equity_growth' => $faker->randomFloat(2, 1, 50), // e.g., -5.50% to 50.00%
                'avg_per_month' => $faker->randomFloat(2, 1, 20),
                'total_pips' => $faker->numberBetween(-2000, 10000),
                'description' => $faker->paragraph(),
                'rating' => $faker->randomFloat(1, 1, 5), // rating between 1.0 and 5.0
            ]);
        }
    }
}
