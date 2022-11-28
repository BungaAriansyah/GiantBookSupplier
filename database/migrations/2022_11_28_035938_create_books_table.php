<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publisher_id')->references('id')->on('publishers');
            $table->string('title');
            $table->string('author');
            $table->integer('year');
            $table->longText('synopsis');
            $table->string('image');
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
