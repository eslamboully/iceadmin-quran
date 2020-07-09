<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo')->nullable();
            $table->double('price')->nullable();
            $table->integer('quantity')->default(0);
            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('admins')->onDelete('set null');
            $table->timestamps();
        });

        # Translation
        Schema::create('product_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('overview')->nullable();
            $table->longText('tech_specs')->nullable();
            $table->longText('accessories')->nullable();
            $table->integer('product_id')->unsigned();
            $table->string('meta_title')->nullable();
            $table->longText('meta_desc')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('slug')->nullable();
            $table->string('locale')->index();
            $table->unique(['product_id', 'locale']);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_translations');
    }
}
