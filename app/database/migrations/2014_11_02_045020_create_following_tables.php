<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowingTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::dropifexists('u_fol');
        Schema::dropifexists('rep_fol');
        Schema::dropifexists('dist_fol');
        Schema::dropifexists('co_leg_fol');
        Schema::dropifexists('co_fol');
        Schema::dropifexists('ci_fol');
        Schema::dropifexists('ci_leg_fol');
        Schema::dropifexists('s_fol');
        Schema::dropifexists('s_leg_fol');
        Schema::dropifexists('f_fol');
        Schema::dropifexists('f_leg_fol');
        Schema::dropifexists('cat_fol');
        Schema::dropifexists('sub_cat_fol');       
         
        # follow city info
        Schema::create('ci_fol', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->smallInteger('ci_fk')->unsigned()->index();
            $table->foreign('ci_fk')->references('id')->on('city');
        });

        # follow legislation of a city
        Schema::create('ci_leg_fol', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('ci_leg_fk')->unsigned()->index();
            $table->foreign('ci_leg_fk')->references('id')->on('ci_leg');
            $table->timestamps();
        });

        # follow county info
        Schema::create('co_fol', function ($table) {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->smallInteger('co_fk')->unsigned()->index();
            $table->foreign('co_fk')->references('id')->on('county');
        });

        # follow county level legislation
        Schema::create('co_leg_fol', function ($table) {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('co_leg_fk')->unsigned()->index();
            $table->foreign('co_leg_fk')->references('id')->on('ci_leg');
            $table->timestamps();
        });

        # follow info related to a country/federal level of government
        Schema::create('f_fol', function ($table) {
            $table->tinyInteger('country_fk')->unsigned()->index()->default('1');
            $table->foreign('country_fk')->references('id')->on('federal');
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
        });

        # follow federal level legislation
        Schema::create('f_leg_fol', function ($table) {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('f_leg_fk')->unsigned()->index();
            $table->foreign('f_leg_fk')->references('id')->on('f_leg');
            $table->timestamps();
        });

        # follow info related to a state
        Schema::create('s_fol', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->tinyInteger('s_fk')->unsigned()->index();
            $table->foreign('s_fk')->references('id')->on('state');
        });

        # follow state level legislation
        Schema::create('s_leg_fol', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('s_leg_fk')->unsigned()->index();
            $table->foreign('s_leg_fk')->references('id')->on('s_leg');
        });

        # follow info relating to a district
        Schema::create('dist_fol', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->smallInteger('d_fk')->unsigned()->index();
            $table->foreign('d_fk')->references('id')->on('district');
            $table->timestamps();
        });

        # follow info associated with a political party
        Schema::create('p_fol', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->tinyInteger('p_fk')->unsigned()->index();
            $table->foreign('p_fk')->references('id')->on('party');
            $table->timestamps();
        });

        # follow info associated with a regional political party
        Schema::create('r_p_fol', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->tinyInteger('r_p_fk')->unsigned()->index();
            $table->timestamps();
        });

        # follow a representative
        Schema::create('rep_fol', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->mediumInteger('rep_fk')->unsigned()->index();
            $table->foreign('rep_fk')->references('id')->on('rep');
            $table->timestamps();
        });

        # follow a user
        Schema::create('u_fol', function ($table) {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('follower_fk')->unsigned()->index();
            $table->foreign('follower_fk')->references('id')->on('user');
            $table->timestamps();
        });
        
        # follow a catagory
        Schema::create('cat_fol', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->tinyInteger('cat_fk')->unsigned()->index();
            $table->foreign('cat_fk')->references('id')->on('cat');
            $table->timestamps();
        });
        
        # follow a sub catagory
        Schema::create('sub_cat_fol', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->tinyInteger('cat_fk')->unsigned()->index();
            $table->foreign('cat_fk')->references('id')->on('sub_cat');
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
        Schema::drop('cat_fol');
        Schema::drop('sub_cat_fol');	
        Schema::drop('u_fol');
        Schema::drop('rep_fol');
        Schema::drop('dist_fol');
        Schema::drop('co_leg_fol');
        Schema::drop('co_fol');
        Schema::drop('ci_fol');
        Schema::drop('ci_leg_fol');
        Schema::drop('s_fol');
        Schema::drop('s_leg_fol');
        Schema::drop('f_fol');
        Schema::drop('f_leg_fol');
    }
}
