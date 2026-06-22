<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVerificationCodesToWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('withdrawals', function (Blueprint $table) {
            $table->string('withdrawal_code', 5)->nullable()->after('status');
            $table->string('transfer_code', 5)->nullable()->after('withdrawal_code');
            $table->boolean('withdrawal_code_verified')->default(false)->after('transfer_code');
            $table->boolean('transfer_code_verified')->default(false)->after('withdrawal_code_verified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('withdrawals', function (Blueprint $table) {
            $table->dropColumn(['withdrawal_code', 'transfer_code', 'withdrawal_code_verified', 'transfer_code_verified']);
        });
    }
}
