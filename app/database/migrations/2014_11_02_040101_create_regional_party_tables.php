<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionalPartyTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
	    Schema::dropifexists('r_party');
        Schema::dropifexists('r_party_mem');
	
        Schema::create('r_party', function($table)
        {
            $table->tinyInteger('id')->unsigned()->autoIncrement();
            $table->tinyInteger('s_fk')->unsigned()->index();
            $table->foreign('s_fk')->references('id')->on('state');
            $table->string('name')->unique();
            $table->text('description');
        });

        Schema::create('r_party_mem', function($table)
        {
            $table->tinyInteger('p_fk')->unsigned()->index();
            $table->foreign('p_fk')->references('id')->on('party');
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('r_party');
        Schema::drop('r_party_mem');
    }
}
