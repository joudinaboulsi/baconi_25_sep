<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('background')->nullable();
            $table->string('logo_contact')->nullable();
            $table->string('title_header')->nullable();
            $table->string('subtitle_header')->nullable();
            $table->string('title_page')->nullable();
            $table->string('title_contact')->nullable();
            $table->string('subtitle_contact')->nullable();
            $table->string('title_career')->nullable();
            $table->string('subtitle_career')->nullable();
            $table->string('title_address')->nullable();
            $table->string('subtitle_address')->nullable();
            $table->string('image_address')->nullable();
            
            $table->string('icon_lb')->nullable();
            $table->string('icon_jordan')->nullable();
            $table->string('icon_cyprus')->nullable();

            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();


            $table->string('location1')->nullable();
            $table->string('location2')->nullable();
            $table->string('location3')->nullable();

            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone3')->nullable();


            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('email3')->nullable();





            $table->string('title_media')->nullable();
            $table->string('map')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
