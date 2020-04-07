<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();;
            $table->unsignedBigInteger('event_id');
            $table->timestamps();
            $table->foreign('event_id')->references('id')->on('events');

        });
    }

   
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
