<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('deposits', function (Blueprint $table) {
      $table->increments('id');
      $table->bigInteger('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->unsignedInteger('coin_id');
      $table->foreign('coin_id')->references('id')->on('coins')->onDelete('cascade');
      $table->bigInteger('package_id')->unsigned()->nullable();
      $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
      $table->bigInteger('amount');
      $table->string('status');
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
    Schema::dropIfExists('deposits');
  }
}
