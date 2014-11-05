<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegislationTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
        Schema::dropifexists('f_leg');
        Schema::dropifexists('s_leg');
        Schema::dropifexists('co_leg');
        Schema::dropifexists('ci_leg');		
		
        Schema::create('ci_leg', function($table)
        {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->smallInteger('ci_fk')->unsigned()->index();
            $table->foreign('ci_fk')->references('id')->on('city');
            $table->date('proposal');
            $table->date('end');
            $table->string('leg_name');
            $table->longtext('description');
            $table->string('topic');
            $table->string('leg_tag')->nullable();
            $table->string('rel_news');
        });

        Schema::create('co_leg', function ($table) {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->smallInteger('co_fk')->unsigned()->index();
            $table->foreign('co_fk')->references('id')->on('county');
            $table->date('proposal');
            $table->date('end');
            $table->string('leg_name');
            $table->longtext('description');
            $table->string('topic');
            $table->string('leg_tag')->nullable();
            $table->string('rel_news');
        });

        Schema::create('f_leg', function ($table) {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->tinyInteger('country_fk')->unsigned()->index();
            $table->foreign('country_fk')->references('id')->on('federal');
            $table->date('proposal');
            $table->date('end');
            $table->string('leg_name');
            $table->longtext('description');
            $table->smallInteger('sponsors')->unsigned();
            $table->string('topic')->nullable();
            $table->string('leg_tag')->nullable();
            $table->string('rel_news')->nullable();
        });

        Schema::create('s_leg', function($table)
        {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->tinyInteger('s_fk')->unsigned()->index();
            $table->foreign('s_fk')->references('id')->on('state');
            $table->tinyInteger('country_fk')->unsigned()->index();
            $table->foreign('country_fk')->references('id')->on('federal');
            $table->tinyInteger('b_fk')->unsigned()->index();
            $table->foreign('b_fk')->references('id')->on('branch');
            $table->longtext('description');
            $table->string('url');
            $table->date('proposal');
            $table->date('lastupdate');
            $table->string('leg_id',8);
            $table->string('name',8);
            $table->string('leg_sname', 10);
            $table->string('leg_lname');
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('f_leg');
        Schema::drop('s_leg');
        Schema::drop('co_leg');
        Schema::drop('ci_leg');
    }
}
