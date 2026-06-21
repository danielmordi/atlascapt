<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCopyTradersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_copy_traders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('copy_trader_id')->constrained()->cascadeOnDelete();
            $table->string('copy_trader_status')->default('inactive'); // 'active', 'inactive'
            $table->string('status')->default('unfollowed'); // 'followed', 'unfollowed'
            $table->timestamp('date_followed');
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
        Schema::dropIfExists('user_copy_traders');
    }
}
