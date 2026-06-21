<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sites', function (Blueprint $table) {
      $table->id();
      $table->string('banner_heading')->nullable();
      $table->longText('banner_sub_heading')->nullable();
      $table->string('about_heading')->nullable();
      $table->longText('about_content')->nullable();
      $table->string('contact_address')->nullable();
      $table->string('contact_email')->nullable();
      $table->string('contact_phonenumber')->nullable();
      $table->string('our_service_heading_one')->nullable();
      $table->longText('our_service_body_one')->nullable();
      $table->string('our_service_heading_two')->nullable();
      $table->longText('our_service_body_two')->nullable();
      $table->string('our_service_heading_three')->nullable();
      $table->longText('our_service_body_three')->nullable();
      $table->string('our_service_heading_four')->nullable();
      $table->longText('our_service_body_four')->nullable();
      $table->string('our_service_heading_five')->nullable();
      $table->longText('our_service_body_five')->nullable();
      $table->string('our_service_heading_six')->nullable();
      $table->longText('our_service_body_six')->nullable();
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
    Schema::dropIfExists('sites');
  }
}
