<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            $table->text('text')->nullable();
            $table->string('link')->nullable();


            $table->string('image1')->nullable();
            $table->string('logo1')->nullable();
            $table->text('text1')->nullable();
            $table->string('link1')->nullable();

            $table->string('image2')->nullable();
            $table->string('logo2')->nullable();
            $table->text('text2')->nullable();
            $table->string('link2')->nullable();


            
            $table->string('image3')->nullable();
            $table->string('logo3')->nullable();
            $table->text('text3')->nullable();
            $table->string('link3')->nullable();
            
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
        Schema::dropIfExists('companies');
    }
}
