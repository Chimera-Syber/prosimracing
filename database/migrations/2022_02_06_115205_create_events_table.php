<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('league');
            $table->dateTime('start_date');
            $table->unsignedInteger('game_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index('game_id', 'events_game_idx');

            $table->foreign('game_id', 'events_game_fk')->on('games')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
