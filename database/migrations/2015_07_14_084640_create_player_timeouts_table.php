<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerTimeoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_timeouts', function(Blueprint $table){
            $table->increments('id');
            $table->mediumText('reason');
            $table->dateTime('ends_at');
            $table->timestamp('created_at');
            // Constraints
            $table->foreign('id')->references('id')->on('players')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('player_timeouts');
    }
}
