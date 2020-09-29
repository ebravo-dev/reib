<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('authors')->nullable();
            $table->string('institute')->nullable();
            $table->string('month')->nullable();
            $table->integer('year')->nullable();
            $table->string('volume')->nullable();
            $table->string('number')->nullable();
            $table->string('eskeywords')->nullable();
            $table->string('enkeywords')->nullable();
            $table->longText('esabstract')->nullable();
            $table->longText('enabstract')->nullable();
            $table->string('category')->nullable();
            $table->integer('indexnumber')->nullable();
            $table->string('linkpdf')->nullable();
            $table->string('linkheader')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
