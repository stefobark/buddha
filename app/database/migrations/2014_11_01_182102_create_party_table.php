<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
	    Schema::dropifexists('party');
        Schema::create('party', function($table)
        {
            $table->tinyInteger('id')->unsigned()->autoIncrement();
            $table->string('name');
        });	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('party');
	}

}
