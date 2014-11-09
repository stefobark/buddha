<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGeometryColumnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('geometry_columns', function(Blueprint $table)
		{
			$table->string('F_TABLE_CATALOG', 256)->nullable();
			$table->string('F_TABLE_SCHEMA', 256)->nullable();
			$table->string('F_TABLE_NAME', 256);
			$table->string('F_GEOMETRY_COLUMN', 256);
			$table->integer('COORD_DIMENSION')->nullable();
			$table->integer('SRID')->nullable();
			$table->string('TYPE', 256);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('geometry_columns');
	}

}
