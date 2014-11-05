<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropifexists('county');
        Schema::create('county', function ($table) {
            $table->smallInteger('id')->unsigned()->autoIncrement();
            $table->tinyInteger('s_fk')->unsigned()->index();
            $table->foreign('s_fk')->references('id')->on('state');
            $table->tinyInteger('cat_fk')->unsigned()->index()->default('2');
            $table->foreign('cat_fk')->references('id')->on('cat');
            $table->string('name');
            $table->mediumInteger('pop')->unsigned();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('county');
    }
}
