<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('parent', 20)->nullable();
            $table->string('subparent', 30)->nullable();
            $table->string('title', 200)->nullable();
            $table->string('slug', 200)->nullable();
            $table->string('description', 225)->nullable();
            $table->text('content')->nullable();
            $table->string('file', 200)->nullable();
            $table->text('others')->nullable();
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
        Schema::dropIfExists('post');
    }
}
