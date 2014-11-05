<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropifexists('federal');
        Schema::create('federal', function ($table) {
            $table->tinyInteger('id')->unsigned()->autoIncrement();
            $table->string('name');
            $table->tinyInteger('cat_fk')->default('4')->unsigned()->index();
            $table->foreign('cat_fk')->references('id')->on('cat');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('federal');
	}

}
