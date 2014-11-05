<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropifexists('state');
        Schema::create('state', function($table)
        {
            $table->tinyInteger('id')->unsigned()->autoIncrement();
            $table->tinyInteger('cat_fk')->default('1')->unsigned()->index();
            $table->foreign('cat_fk')->references('id')->on('cat');
            $table->tinyInteger('country_fk')->default('1')->unsigned()->index();
            $table->foreign('country_fk')->references('id')->on('federal');
            $table->char('abbr', 2 )->unique();
            $table->string('name',20 )->unique();
        });	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('state');
	}

}
