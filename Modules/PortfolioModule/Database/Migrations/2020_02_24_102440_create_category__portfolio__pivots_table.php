<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPortfolioPivotsTable extends Migration
{
   
    public function up()
    {
        Schema::create('category_portfolio_pivot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('portfolio_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('category__portfolio__pivots');
    }
}
