<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_models', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',100);
            $table->date('DOB')->default('1990-01-01');
            $table->boolean('sex')->default(true);
            $table->string('address',100)->nullable();
            $table->unsignedBigInteger('class_id');
            $table->text('description')->nullable();
            $table->foreign('class_id')->references('id')->on('class_models');	
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
        Schema::dropIfExists('student_models');
    }
}
