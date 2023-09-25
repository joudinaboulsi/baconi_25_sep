<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icon1')->nullable();
            $table->string('icon2')->nullable();
            $table->string('icon3')->nullable();
            $table->string('icon4')->nullable();
            $table->string('title1')->nullable();
            $table->string('subtitle1')->nullable(); 
            $table->string('title2')->nullable();
            $table->string('subtitle2')->nullable();

            $table->string('title3')->nullable();
            $table->string('subtitle3')->nullable();

            $table->string('title4')->nullable();
            $table->string('subtitle4')->nullable();

            $table->string('counter1')->nullable();
            $table->string('title1_count')->nullable();
            $table->string('subtitle1_count')->nullable();
            $table->string('image_count')->nullable();
            $table->string('years')->nullable();
            $table->string('counter2')->nullable();
            $table->string('title2_count')->nullable();
            $table->string('subtitle2_count')->nullable();
            $table->string('logo')->nullable();


            $table->string('subtitle_section1')->nullable();
            $table->string('title_section1')->nullable();
            $table->string('image_section1')->nullable();
            $table->string('text_consultancy')->nullable();
            $table->text('text2_section1')->nullable();
            $table->text('text3_section1')->nullable();
            $table->text('text4_section1')->nullable();
            $table->string('image1_service')->nullable();
            $table->string('image2_service')->nullable();
            $table->string('image3_service')->nullable();
            $table->string('title1_service')->nullable();
            $table->string('title2_service')->nullable();
            $table->string('title3_service')->nullable();
            $table->text('p1_service')->nullable();
            $table->text('p2_service')->nullable();
            $table->text('p3_service')->nullable();
            $table->string('video')->nullable();
            $table->string('title_video')->nullable();
            $table->string('subtitle_video')->nullable();
            $table->string('link_video')->nullable();
            $table->string('company1')->nullable();
            $table->string('company2')->nullable();
            $table->string('company3')->nullable();
            $table->string('company4')->nullable();
          


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
        Schema::dropIfExists('home_pages');
    }
}
