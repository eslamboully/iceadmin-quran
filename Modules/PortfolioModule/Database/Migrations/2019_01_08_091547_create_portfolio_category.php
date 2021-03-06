<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cover_photo')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('admins')->onDelete('set null');
            $table->timestamps();
        });

        # Translation
        Schema::create('portfolio_categ_trans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('portfolio_category_id')->unsigned();
            $table->string('locale')->index();


            $table->string('meta_keywords')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_desc')->nullable();
            $table->string('slug')->nullable();

            
            $table->unique(['portfolio_category_id', 'locale']);
            $table->foreign('portfolio_category_id')->references('id')->on('portfolio_category')->onDelete('cascade');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('portfolio_category');
        Schema::dropIfExists('portfolio_categ_trans');
    }
}
