<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('background')->nullable();
            $table->string('subtitle_page')->nullable();
            $table->string('title_page')->nullable();
 
            $table->string('image')->nullable();
            $table->string('title_section1')->nullable();
            $table->string('text_section1')->nullable();
            $table->string('title_section2')->nullable();
            $table->string('text_section2')->nullable();
            $table->string('title_section3')->nullable();
            $table->string('text_section3')->nullable();
            $table->string('title_section4')->nullable();
            $table->string('text_section4')->nullable();
            $table->string('title_team')->nullable();
            
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
        Schema::dropIfExists('abouts');
    }
}
