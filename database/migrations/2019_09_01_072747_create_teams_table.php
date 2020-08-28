<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id_teams');
            $table->integer('id_users');
            $table->string('u');
            $table->string('foto_teams');
            $table->string('nama_teams');
            $table->string('foto_pelatih');
            $table->string('nama_pelatih');
            $table->string('foto_asisten');
            $table->string('nama_asisten');
            $table->string('foto_official');
            $table->string('nama_official');
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
        Schema::dropIfExists('teams');
    }
}
