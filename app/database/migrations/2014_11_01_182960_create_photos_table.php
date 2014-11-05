<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::dropifexists('photos');
        Schema::create('photos', function($table)
        {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->string('path');
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
        Schema::drop('photos');
	}
}
