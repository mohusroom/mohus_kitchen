<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('menu_id')->unsigned();
            $table->string('path', 2000);
            $table->tinyInteger('sort_number');
            $table->tinyInteger('status_id')->unsigned();
            $table->dateTime('status_updated_at', 0)->nullable();
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
        Schema::dropIfExists('menu_images');
    }
}
