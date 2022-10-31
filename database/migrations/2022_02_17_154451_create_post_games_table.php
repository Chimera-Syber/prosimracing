<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_games', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('post_id');
            $table->unsignedInteger('game_id');

            // IDX
            $table->index('post_id', 'post_game_post_idx');
            $table->index('game_id', 'post_game_game_idx');

            // FK
            $table->foreign('post_id', 'post_game_post_fk')->on('posts')->references('id');
            $table->foreign('game_id', 'post_game_game_fk')->on('games')->references('id');

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
        Schema::dropIfExists('post_games');
    }
}
