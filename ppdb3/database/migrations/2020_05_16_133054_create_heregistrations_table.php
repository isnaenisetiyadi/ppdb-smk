<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heregistrations', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('nik');
            $table->integer('child_order');
            $table->integer('brother_count');
            $table->string('mother_name');
            $table->string('mother_job');
            $table->string('mother_study');
            $table->float('mother_income');
            $table->string('father_name');
            $table->string('father_job');
            $table->string('father_study');
            $table->float('father_income');
            $table->string('guardian_name');
            $table->string('guardian_job');
            $table->string('guardian_study');
            $table->float('guardian_income');
            $table->string('parent_call');
            $table->string('student_call');
            $table->string('transportation');
            $table->float('home_length');
            $table->float('time_to_school');
            $table->boolean('kps');
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
        Schema::dropIfExists('heregistrations');
    }
}
