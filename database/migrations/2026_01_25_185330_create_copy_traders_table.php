<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyTradersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy_traders', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('avatar');
            $table->string('location');
            $table->string('mininum_capital');
            $table->string('risk_level');
            $table->string('equity_growth');
            $table->string('avg_per_month');
            $table->string('total_pips');
            $table->text('description');
            $table->string('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('copy_traders');
    }
}
