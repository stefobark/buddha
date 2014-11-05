<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropifexists('branch');
        Schema::create('branch', function($table)
        {
            $table->tinyInteger('id')->unsigned()->autoIncrement();
            $table->char('abbr',1);
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
        Schema::drop('branch');
	}
}
