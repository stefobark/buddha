<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
	    Schema::dropifexists('ci_vid');
        Schema::dropifexists('co_vid');
        Schema::dropifexists('f_vid');
        Schema::dropifexists('s_vid');

        # videos relating to city legislation
        Schema::create('ci_vid', function($table)
        {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->integer('ci_leg_fk')->unsigned()->index();
            $table->foreign('ci_leg_fk')->references('id')->on('ci_leg');
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->string('video_url',30);
            $table->timestamps();
        });

        # videos relating to county legislation
        Schema::create('co_vid', function ($table) {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('co_leg_fk')->unsigned()->index();
            $table->foreign('co_leg_fk')->references('id')->on('s_leg');
            $table->string('video_url', 30);
            $table->timestamps();
        });


        # videos relating to a countries legislation
        Schema::create('f_vid', function ($table) {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('f_leg_fk')->unsigned()->index();
            $table->foreign('f_leg_fk')->references('id')->on('f_leg');
            $table->string('video_url', 30);
            $table->timestamps();
        });

        # videos relating to state legislation
        Schema::create('s_vid', function($table)
        {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('s_leg_fk')->unsigned()->index();
            $table->foreign('s_leg_fk')->references('id')->on('s_leg');
            $table->string('video_url',30);
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
        Schema::drop('ci_vid');
        Schema::drop('co_vid');
        Schema::drop('f_vid');
        Schema::drop('s_vid');
    }
}
