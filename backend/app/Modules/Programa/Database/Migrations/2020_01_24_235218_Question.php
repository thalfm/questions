<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Question extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->integerIncrements('question_id');
            $table->string('name', 5000);
            $table->unsignedInteger('agency_id');
            $table->foreign('agency_id')
                ->references('agency_id')->on('agency');
            $table->unsignedInteger('examining_board_id');
            $table->foreign('examining_board_id')
                ->references('examining_board_id')->on('examining_board');
            $table->unsignedInteger('subject_id');
            $table->foreign('subject_id')
                ->references('subject_id')->on('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question');
    }
}
