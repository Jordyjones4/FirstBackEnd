<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('game_name');
            $table->string('game_description');
            $table->integer('game_price');
            $table->foreignId('game_category')->references('id')->on('categories')->onDelete('cascade');
            $table->string('game_developer');
            $table->string('game_publisher');
            $table->string('game_cover');
            $table->string('game_trailer');
            $table->string('adultgame')->default('0');
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
        Schema::dropIfExists('games');
    }
}
