<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nav_item_id')->index()->nullable();
            $table->string('title_en', 50)->unique();
            $table->string('title_fr', 50)->unique();
            $table->longText('content_en');
            $table->longText('content_fr');
            $table->boolean('top_menu');
            $table->string('route_name', 30)->unique();
            $table->boolean('banner');
            $table->string('url', 50)->unique();
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
        Schema::dropIfExists('pages');
    }
}
