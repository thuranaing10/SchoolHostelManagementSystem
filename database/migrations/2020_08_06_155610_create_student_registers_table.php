<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rollno');
            $table->string('name');
            $table->string('phone');
            $table->text('email');
            $table->text('address');
            $table->string('gender');
            $table->text('nrc');
            $table->string('fname');
            $table->string('fpro');
            $table->string('mname');
            $table->string('mpro');
            $table->string('pphone');
            $table->string('image');
            $table->boolean('status')->default('0');
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
        Schema::dropIfExists('student_registers');
    }
}
