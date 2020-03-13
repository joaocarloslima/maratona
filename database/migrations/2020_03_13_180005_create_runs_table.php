<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunsTable extends Migration
{
    public function up()
    {
        Schema::create('runs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('problem_id');
            $table->date('send_at');
            $table->enum('status', 
                ['success', 'incorrect_output', 'time_limit_exceeded', 'runtime_error', 
                'compilation_error', 'output_format_error']
            );	
            $table->timestamps();

            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('problem_id')->references('id')->on('problems');


        });
    }

    public function down()
    {
        Schema::dropIfExists('runs');
    }
}
