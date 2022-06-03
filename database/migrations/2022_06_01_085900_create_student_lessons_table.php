<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_lessons', function (Blueprint $table) {
            $table->integer('student_id')->primarykey;
            $table->string('student_name');
            $table->integer('grade');
            $table->string('hometown');
            $table->integer('major_id')->NULLABLE($value = false);
            //$table->integer('major_id')->REFERENCES('major_id')->majors;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_lessons');
    }
};
