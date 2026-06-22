<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPayoutMethodToWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('withdrawals', function (Blueprint $table) {
            // Make coin_id nullable so bank/revolut withdrawals don't need a coin
            $table->unsignedInteger('coin_id')->nullable()->change();

            // Store the chosen payout channel: crypto | bank_transfer | revolut
            $table->string('payout_method')->default('crypto')->after('coin_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('withdrawals', function (Blueprint $table) {
            $table->dropColumn('payout_method');
            $table->unsignedInteger('coin_id')->nullable(false)->change();
        });
    }
}
