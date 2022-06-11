<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->binary('picture')->nullable();
            $table->longText('body');
            $table->text('excerpt');
            $table->string('slug')->unique();
            $table->enum('category', ['Planet', 'Benda Langit Lain', 'Istilah Angkasa']);
            $table->text('trivia');
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
        Schema::dropIfExists('contents');
    }
}
