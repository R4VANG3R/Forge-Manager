<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function(Blueprint $table) {
            $table->increments('id');
            $table->string('uuid', 32)->nullable();
            $table->string('username');
            $table->string('ipv4_address', 15)->nullable();
            $table->string('ipv6_address', 39)->nullable();
            $table->boolean('op')->default(false);
            $table->enum('flag', ['green', 'orange', 'red'])->default('green');
            $table->timestamp('last_login');
            $table->timestamps();
            // Constraints
            $table->unique('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players');
    }
}
