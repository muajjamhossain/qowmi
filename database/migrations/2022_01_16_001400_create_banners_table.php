<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title_en');
            $table->string('title_bn');
            $table->string('title_arb');
            $table->string('subtitle_en')->nullable();
            $table->string('subtitle_bn')->nullable();
            $table->string('subtitle_arb')->nullable();
            $table->string('button_en')->nullable();
            $table->string('button_bn')->nullable();
            $table->string('button_arb')->nullable();
            $table->string('url')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('create_by')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
