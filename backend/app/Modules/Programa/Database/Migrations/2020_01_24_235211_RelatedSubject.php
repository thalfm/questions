<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelatedSubject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('related_subjects', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('subject_id_principal');
            $table->foreign('subject_id_principal')
                ->references('id')->on('subjects');
            $table->unsignedInteger('subject_id_child');
            $table->foreign('subject_id_child')
                ->references('id')->on('subjects');

            $table->unique('subject_id_child');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('related_subject');
    }
}
