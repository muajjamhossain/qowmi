<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\AboutAuthor;

class CreateAboutAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_bn')->nullable();
            $table->string('name_arb')->nullable();
            $table->string('title')->nullable();
            $table->string('title_bn')->nullable();
            $table->string('title_arb')->nullable();
            $table->string('image')->nullable();
            $table->string('describe1')->nullable();
            $table->string('describe1_bn')->nullable();
            $table->string('describe1_arb')->nullable();
            $table->string('_token')->nullable();
            $table->timestamps();
        });

        AboutAuthor::create([
          'name' => 'MM Abdul Hi'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_authors');
    }
}
