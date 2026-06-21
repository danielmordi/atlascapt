<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('username')->unique();
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->text('two_factor_secret')->nullable();
      $table->text('two_factor_recovery_codes')->nullable();
      $table->bigInteger('role_id')->unsigned()->default(2);
      $table->unsignedBigInteger('referrer_id')->nullable();
      $table->boolean('is_blocked')->default(0)->nullable();
      $table->string('package')->nullable();
      $table->unsignedBigInteger('package_id')->nullable();
      $table->float('wallet_balance')->nullable(); // multip by 100 million
      $table->float('profit')->nullable();
      $table->float('totalProfitEarned')->nullable();
      $table->integer('profitCount')->default(1);
      $table->integer('investmentDuration')->nullable();
      $table->float('bonus')->nullable();
      $table->float('deposit')->default(0);
      $table->string('token')->nullable();
      $table->string('kyc')->nullable();
      $table->string('isKycUploaded')->default('false')->nullable();
      $table->string('is_activated')->default('false')->nullable();
      $table->string('withdrawal_limit')->nullable();
      $table->rememberToken();
      $table->timestamps();

      $table->foreign('referrer_id')->references('id')->on('users')->onDelete('cascade');
      // Foreign key for package_id will be added in the packages migration or a later migration

    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('users');
  }
}
