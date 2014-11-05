<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
	    Schema::dropifexists('r_vote');
        Schema::dropifexists('ci_vote');
        Schema::dropifexists('co_vote');
        Schema::dropifexists('s_vote');
        Schema::dropifexists('f_vote');
	
        # votes on city legislation
        Schema::create('ci_vote', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('ci_leg_fk')->unsigned()->index();
            $table->foreign('ci_leg_fk')->references('id')->on('ci_leg');
            $table->tinyInteger('vote');
            $table->timestamps();
        });

        # votes on county legislation
        Schema::create('co_vote', function ($table) {
            $table->integer('co_leg_fk')->unsigned()->index();
            $table->foreign('co_leg_fk')->references('id')->on('s_leg');
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->tinyInteger('vote');
            $table->timestamps();
        });

        # votes on state legislation
        Schema::create('s_vote', function($table)
        {
            $table->integer('s_leg_fk')->unsigned()->index();
            $table->foreign('s_leg_fk')->references('id')->on('s_leg');
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->tinyInteger('vote');
            $table->timestamps();
        });

        # votes on federal legislation
        Schema::create('f_vote', function ($table) {
            $table->integer('f_leg_fk')->unsigned()->index();
            $table->foreign('f_leg_fk')->references('id')->on('f_leg');
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->tinyInteger('vote');
            $table->timestamps();
        });

        # votes on representatives
        Schema::create('r_vote', function ($table) {
            $table->mediumInteger('r_fk')->unsigned()->index();
            $table->foreign('r_fk')->references('id')->on('rep');
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->tinyInteger('vote');
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
        Schema::drop('r_vote');
        Schema::drop('ci_vote');
        Schema::drop('co_vote');
        Schema::drop('s_vote');
        Schema::drop('f_vote');
    }
}
