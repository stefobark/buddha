<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTables extends Migration
{

    public function up()
    {
    	Schema::dropifexists('cat');
        Schema::dropifexists('sub_cat');
        
        Schema::create('cat', function($table)
        {
            $table->tinyInteger('id')->unsigned()->autoIncrement();
            $table->string('cat')->unique();
            $table->text('description');
        });


        Schema::create('sub_cat', function($table)
        {
            $table->tinyInteger('id')->unsigned()->autoIncrement();
            $table->tinyInteger('cat_fk')->unsigned()->index();
            $table->foreign('cat_fk')->references('id')->on('cat');
            $table->string('title','30');
            $table->text('description');
        });

    }

    public function down(){
        Schema::drop('cat');        
        Schema::drop('sub_cat');
 
    }
}
