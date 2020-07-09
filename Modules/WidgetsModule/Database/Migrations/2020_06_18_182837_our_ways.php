<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OurWays extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_ways', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo')->nullable();
            $table->timestamps();
        });

        Schema::create('our_ways_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->integer('our_ways_id')->unsigned();

            $table->string('meta_title')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('slug')->nullable();
            $table->string('locale')->index();
            $table->unique(['our_ways_id', 'locale']);
            $table->foreign('our_ways_id')->references('id')->on('our_ways')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('our_ways');
        Schema::dropIfExists('our_ways_translation');
    }
}
