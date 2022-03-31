<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name_en');
            $table->string('course_name_bn');
            $table->string('course_name_arb');
            // description
            $table->longText('description_en')->nullable();
            $table->longText('description_bn')->nullable();
            $table->longText('description_arb')->nullable();
            // description
            $table->string('thumbnail')->nullable();
            $table->string('image')->nullable();
            // --------
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('duration')->nullable();
            $table->string('class_time_in')->nullable();
            $table->string('class_time_out')->nullable();
            $table->integer('ragular_price')->nullable();
            $table->integer('discount_price')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('status')->default(1);
            $table->string('_token')->nullable();
            $table->string('_method')->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
