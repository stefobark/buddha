<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictToCityAndCountyTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
        Schema::dropifexists('dist_ci');
        Schema::dropifexists('dist_co');	
	
        Schema::create('dist_co', function($table)
        {
            $table->smallInteger('co_fk')->unsigned()->index();
            $table->foreign('co_fk')->references('id')->on('county');
            $table->smallInteger('d_fk')->unsigned()->index();
            $table->foreign('d_fk')->references('id')->on('district');
        });

        Schema::create('dist_ci', function($table)
        {
            $table->smallInteger('ci_fk')->unsigned()->index();
            $table->foreign('ci_fk')->references('id')->on('city');
            $table->smallInteger('d_fk')->unsigned()->index();
            $table->foreign('d_fk')->references('id')->on('district');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('dist_ci');
        Schema::drop('dist_co');
    }
}
