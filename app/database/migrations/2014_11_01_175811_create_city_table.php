<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropifexists('city');	
        Schema::create('city', function($table)
        {
            $table->smallInteger('id')->unsigned()->autoIncrement();
            $table->tinyInteger('s_fk')->unsigned()->index();
            $table->foreign('s_fk')->references('id')->on('state');
            $table->smallInteger('co_fk')->unsigned()->index();
            $table->foreign('co_fk')->references('id')->on('county');
            $table->tinyInteger('cat_fk')->unsigned()->index()->default('1');
            $table->foreign('cat_fk')->references('id')->on('cat');
            $table->string('name');
            $table->integer('zip')->unsigned();
            $table->double('latitude');
            $table->double('longitude');
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('city');
	}
}
