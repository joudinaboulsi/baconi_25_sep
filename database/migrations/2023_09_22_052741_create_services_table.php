<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('video')->nullable();
            $table->string('subtitle_page')->nullable();
            $table->string('title_page')->nullable();
            $table->string('title_section1')->nullable();
            $table->string('subtitle_section1')->nullable();
            $table->string('text_section1')->nullable();
            $table->string('link_section1')->nullable();
            $table->string('url_section1')->nullable();
            $table->string('image_section1')->nullable();

            $table->string('title_tab1')->nullable();
            $table->string('title_tab2')->nullable();
            $table->string('title_tab3')->nullable();
            $table->text('p_tab1')->nullable();
            $table->string('icon_tab2')->nullable();
            $table->string('small_title_tab2')->nullable();
            $table->string('image_tab2')->nullable();
            $table->text('text_tab2')->nullable();
            $table->text('text2_tab2')->nullable();

            $table->string('icon_tab3')->nullable();
            $table->string('small_title_tab3')->nullable();
            $table->string('image_tab3')->nullable();
            $table->text('text_tab3')->nullable();
            $table->text('text2_tab3')->nullable();

            

        


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
        Schema::dropIfExists('services');
    }
}
