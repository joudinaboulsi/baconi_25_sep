<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('by')->nullable();
            $table->date('date')->nullable();
            $table->string('image')->nullable();
            $table->text('text_blog')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->string('t1')->nullable();
            $table->string('t2')->nullable();
            $table->string('t3')->nullable();
            $table->string('t4')->nullable();
            $table->string('t5')->nullable();
            $table->string('t6')->nullable();
            $table->string('t7')->nullable();
            $table->string('t8')->nullable();


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
        Schema::dropIfExists('blogs');
    }
}
