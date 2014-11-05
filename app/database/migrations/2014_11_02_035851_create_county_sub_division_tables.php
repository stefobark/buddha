<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountySubDivisionTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropifexists('co_sub');
        Schema::create('co_sub', function ($table) {
            $table->smallInteger('id')->autoIncrement()->unsigned();
            $table->tinyInteger('s_fk')->unsigned()->index();
            $table->foreign('s_fk')->references('id')->on('state');
            $table->smallInteger('co_fk')->unsigned()->index();
            $table->foreign('co_fk')->references('id')->on('county');
            $table->string('name');
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('co_sub');
	}
}
