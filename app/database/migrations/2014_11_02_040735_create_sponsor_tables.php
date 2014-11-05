<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::dropifexists('ci_spons');
        Schema::dropifexists('co_spons');
        Schema::dropifexists('s_spons');
        Schema::dropifexists('f_spons');
		
        # city legislation sponsors
        Schema::create('ci_spons', function($table) {
            $table->integer('ci_leg_fk')->unsigned()->index();
            $table->foreign('ci_leg_fk')->references('id')->on('ci_leg');
            $table->mediumInteger('rep_fk')->unsigned()->index();
            $table->foreign('rep_fk')->references('id')->on('rep');
            $table->tinyInteger('spons_lvl')->unsigned();
        });

        # county legislation sponsors
        Schema::create('co_spons', function ($table) {
            $table->integer('co_leg_fk')->unsigned()->index();
            $table->foreign('co_leg_fk')->references('id')->on('ci_leg');
            $table->mediumInteger('rep_fk')->unsigned()->index();
            $table->foreign('rep_fk')->references('id')->on('rep');
        });

        # federal legislation sponsors
        Schema::create('f_spons', function ($table) {
            $table->integer('f_leg_fk')->unsigned()->index();
            $table->foreign('f_leg_fk')->references('id')->on('f_leg');
            $table->mediumInteger('rep_fk')->unsigned()->index();
            $table->foreign('rep_fk')->references('id')->on('rep');
        });

        # state legislation sponsors
        Schema::create('s_spons', function($table) {
            $table->integer('s_leg_fk')->unsigned()->index();
            $table->foreign('s_leg_fk')->references('id')->on('s_leg');
            $table->mediumInteger('rep_fk')->unsigned()->index();
            $table->foreign('rep_fk')->references('id')->on('rep');
            $table->tinyInteger('type')->unsigned();
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('ci_spons');
        Schema::drop('co_spons');
        Schema::drop('s_spons');
        Schema::drop('f_spons');
    }
}
