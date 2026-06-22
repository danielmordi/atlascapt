<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeCoinIdNullableInDepositsTable extends Migration
{
    /**
     * Run the migrations.
     * Makes coin_id nullable so internal reinvestment deposits
     * don't require a coin reference (no coin is selected in that flow).
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deposits', function (Blueprint $table) {
            // Drop the existing foreign key constraint first
            $table->dropForeign(['coin_id']);

            // Change column to nullable
            $table->unsignedInteger('coin_id')->nullable()->change();

            // Re-add the foreign key with nullable support
            $table->foreign('coin_id')->references('id')->on('coins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deposits', function (Blueprint $table) {
            $table->dropForeign(['coin_id']);
            $table->unsignedInteger('coin_id')->nullable(false)->change();
            $table->foreign('coin_id')->references('id')->on('coins')->onDelete('cascade');
        });
    }
}
