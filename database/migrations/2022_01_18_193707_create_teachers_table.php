<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->string('image');
            $table->string('name_en');
            $table->string('slug');
            $table->string('name_bn');
            $table->string('name_arb');
            $table->string('title_en');
            $table->string('title_bn');
            $table->string('title_arb');
            // second part
            $table->longText('description_en')->nullable();
            $table->longText('description_bn')->nullable();
            $table->longText('description_arb')->nullable();
            // education
            $table->string('education1')->nullable();
            $table->string('education2')->nullable();
            $table->string('education3')->nullable();
            $table->string('education4')->nullable();
            $table->string('education5')->nullable();
            $table->string('education6')->nullable();
            // social link
            $table->string('sm_1')->nullable();
            $table->string('sm_2')->nullable();
            $table->string('sm_3')->nullable();
            $table->string('sm_4')->nullable();
            $table->string('sm_5')->nullable();
            // contact
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('_token')->nullable();
            $table->string('_method')->nullable();

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
        Schema::dropIfExists('teachers');
    }
}
