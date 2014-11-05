<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegislationCatagoryTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::dropifexists('ci_leg_cat');
        Schema::dropifexists('co_leg_cat');
        Schema::dropifexists('s_leg_cat');
        Schema::dropifexists('f_leg_cat');
	
        Schema::create('ci_leg_cat', function($table)
        {
            $table->tinyInteger('cat_fk')->unsigned()->index();
            $table->foreign('cat_fk')->references('id')->on('cat');
            $table->integer('ci_leg_fk')->unsigned()->index();
             $table->foreign('ci_leg_fk')->references('id')->on('ci_leg');
        });

        Schema::create('s_leg_cat', function($table)
        {
            $table->tinyInteger('cat_fk')->unsigned()->index();
            $table->foreign('cat_fk')->references('id')->on('cat');
            $table->integer('s_leg_fk')->unsigned()->index();
            $table->foreign('s_leg_fk')->references('id')->on('s_leg');
        });

        Schema::create('co_leg_cat', function ($table) {
            $table->tinyInteger('cat_fk')->unsigned()->index();
            $table->foreign('cat_fk')->references('id')->on('cat');
            $table->integer('co_leg_fk')->unsigned()->index();
            $table->foreign('co_leg_fk')->references('id')->on('ci_leg');
        });

        Schema::create('f_leg_cat', function ($table) {
            $table->tinyInteger('cat_fk')->unsigned()->index();
            $table->foreign('cat_fk')->references('id')->on('cat');
            $table->integer('f_leg_fk')->unsigned()->index();
            $table->foreign('f_leg_fk')->references('id')->on('f_leg');
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('ci_leg_cat');
        Schema::drop('co_leg_cat');
        Schema::drop('s_leg_cat');
        Schema::drop('f_leg_cat');
    }
}
