<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpatialRefSysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spatial_ref_sys', function(Blueprint $table)
		{
			$table->integer('SRID');
			$table->string('AUTH_NAME', 256)->nullable();
			$table->integer('AUTH_SRID')->nullable();
			$table->string('SRTEXT', 2048)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('spatial_ref_sys');
	}

}
