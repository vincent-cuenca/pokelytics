<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pokemon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type_1');
            $table->string('type_2')->nullable();
            $table->double('hp', 3, 1);
            $table->double('attack', 3, 1);
            $table->double('defense', 3, 1);
            $table->double('special', 3, 1);
            $table->double('speed', 3, 1);
            $table->double('catch_rate', 3, 1);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pokemons');
    }
}
