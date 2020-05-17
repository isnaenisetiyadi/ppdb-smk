<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('address')->nullable();
            $table->integer('nisn')->unique();
            $table->string('birth')->nullable();
            $table->date('birthday')->nullable();
            $table->string('religion')->nullable();
            $table->string('lastschool')->nullable();
            $table->string('schooladdress')->nullable();
            $table->integer('user_id');
            $table->integer('period_id');
            $table->integer('province_id');
            $table->integer('city_id');
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
        Schema::dropIfExists('students');
    }
}
