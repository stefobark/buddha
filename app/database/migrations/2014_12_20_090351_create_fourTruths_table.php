<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFourTruthsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('four_truths', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('uid');
			$table->integer('one');
			$table->integer('two');
			$table->integer('three');
			$table->integer('four');
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
		Schema::drop('fourTruths');
	}

}
