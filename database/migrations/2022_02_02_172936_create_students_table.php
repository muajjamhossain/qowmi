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
            $table->unsignedBigInteger('course_id')->nullable();
            $table->string('student_id_number')->unique();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->unique();
            $table->string('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('name_passport')->nullable();
            $table->string('passport_issue_location')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('permanent_home')->nullable();
            $table->string('city')->nullable();
            $table->string('Post_code')->nullable();
            $table->string('family_name')->nullable();
            $table->string('image')->nullable();
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
