<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->double('price', 15, 2);
            $table->integer('quantity');
            $table->integer('available_quantity');
            $table->integer('min_purchase')->default(1);
            $table->integer('max_purchase')->nullable();
            $table->string('status')->default('active'); // active, closed, upcoming
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
        Schema::dropIfExists('ipos');
    }
}
