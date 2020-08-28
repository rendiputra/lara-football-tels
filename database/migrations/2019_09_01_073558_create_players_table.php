<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id_players');
            $table->integer('id_teams');
            $table->string('foto_players');
            $table->string('nama_players');
            $table->string('no_punggung');
            $table->string('tanggal_lahir');
            $table->string('posisi');
            $table->string('nisn');
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
        Schema::dropIfExists('players');
    }
}
