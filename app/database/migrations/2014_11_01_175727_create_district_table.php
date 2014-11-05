<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropifexists('district');
        Schema::create('district', function($table)
        {
            $table->smallInteger('id')->unsigned()->autoIncrement();
            $table->tinyInteger('s_fk')->unsigned()->index();
            $table->foreign('s_fk')->references('id')->on('state');
            $table->tinyInteger('cat_fk')->default('1')->unsigned()->index();
            $table->foreign('cat_fk')->references('id')->on('cat');
            $table->char('geo_id',5);
            $table->char('name',2);
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
        Schema::drop('district');
	}

}
