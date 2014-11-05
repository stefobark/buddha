<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
		Schema::dropifexists('u_com');
        Schema::dropifexists('rep_com');
        Schema::dropifexists('photo_com');
        Schema::dropifexists('ci_v_com');
        Schema::dropifexists('ci_leg_com');
        Schema::dropifexists('co_v_com');
        Schema::dropifexists('co_leg_com');
        Schema::dropifexists('s_v_com');
        Schema::dropifexists('s_leg_com');
        Schema::dropifexists('f_v_com');
        Schema::dropifexists('f_leg_com');
	
        # comments on city legislation
        Schema::create('ci_leg_com', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('ci_leg_fk')->unsigned()->index();
            $table->foreign('ci_leg_fk')->references('id')->on('ci_leg');
            $table->text('comment');
            $table->tinyInteger('fl_f')->default('0')->unsigned();
            $table->tinyInteger('fl_o')->default('0')->unsigned();
            $table->tinyInteger('fl_i')->default('0')->unsigned();
            $table->integer('like')->unsigned()->default('0');
            $table->timestamps();
        });

        # comments on videos about city legislation
        Schema::create('ci_v_com', function($table)
        {
            $table->integer('ci_v_fk')->unsigned()->index();
            $table->foreign('ci_v_fk')->references('id')->on('ci_vid');
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->text('comment');
            $table->tinyInteger('fl_f')->default('0')->unsigned();
            $table->tinyInteger('fl_o')->default('0')->unsigned();
            $table->tinyInteger('fl_i')->default('0')->unsigned();
            $table->integer('like')->unsigned()->default('0');
            $table->timestamps();
        });

        # comments on county legislation
        Schema::create('co_leg_com', function ($table) {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('co_leg_fk')->unsigned()->index();
            $table->foreign('co_leg_fk')->references('id')->on('ci_leg');
            $table->text('comment');
            $table->tinyInteger('fl_f')->default('0')->unsigned();
            $table->tinyInteger('fl_o')->default('0')->unsigned();
            $table->tinyInteger('fl_i')->default('0')->unsigned();
            $table->integer('like')->unsigned()->default('0');
            $table->timestamps();
        });

        # comments on videos relating to county legislation
        Schema::create('co_v_com', function ($table) {
            $table->integer('co_v_fk')->unsigned()->index();
            $table->foreign('co_v_fk')->references('id')->on('co_vid');
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->text('comment');
            $table->tinyInteger('fl_f')->default('0')->unsigned();
            $table->tinyInteger('fl_o')->default('0')->unsigned();
            $table->tinyInteger('fl_i')->default('0')->unsigned();
            $table->integer('like')->unsigned()->default('0');
            $table->timestamps();
        });

        # comments on federal legislation
        Schema::create('f_leg_com', function ($table) {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('co_leg_fk')->unsigned()->index();
            $table->foreign('co_leg_fk')->references('id')->on('ci_leg');
            $table->text('comment');
            $table->tinyInteger('fl_f')->default('0')->unsigned();
            $table->tinyInteger('fl_o')->default('0')->unsigned();
            $table->tinyInteger('fl_i')->default('0')->unsigned();
            $table->integer('like')->unsigned()->default('0');
            $table->timestamps();
        });

        # comments on videos relating to federal legislation
        Schema::create('f_v_com', function ($table) {
            $table->integer('f_v_fk')->unsigned()->index();
            $table->foreign('f_v_fk')->references('id')->on('f_vid');
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->text('comment');
            $table->tinyInteger('fl_f')->default('0')->unsigned();
            $table->tinyInteger('fl_o')->default('0')->unsigned();
            $table->tinyInteger('fl_i')->default('0')->unsigned();
            $table->integer('like')->unsigned()->default('0');
            $table->timestamps();
        });

        # comments on state legislation
        Schema::create('s_leg_com', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('leg_fk')->unsigned()->index();
            $table->text('comment');
            $table->tinyInteger('fl_f')->default('0')->unsigned();
            $table->tinyInteger('fl_o')->default('0')->unsigned();
            $table->tinyInteger('fl_i')->default('0')->unsigned();
            $table->integer('like')->unsigned()->default('0');
            $table->timestamps();
        });

        # comments on videos relating to state legislation
        Schema::create('s_v_com', function($table)
        {
            $table->integer('s_v_fk')->unsigned()->index();
            $table->foreign('s_v_fk')->references('id')->on('s_vid');
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->text('comment');
            $table->tinyInteger('fl_f')->default('0')->unsigned();
            $table->tinyInteger('fl_o')->default('0')->unsigned();
            $table->tinyInteger('fl_i')->default('0')->unsigned();
            $table->integer('like')->unsigned()->default('0');
            $table->timestamps();
        });

        # comment on photo
        Schema::create('photo_com', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->Integer('photo_fk')->unsigned()->index();
            $table->foreign('photo_fk')->references('id')->on('photos');
            $table->tinyInteger('fl_o')->default('0')->unsigned();
            $table->integer('like')->unsigned()->default('0');
            $table->timestamps();
        });

        # comment on representative
        Schema::create('rep_com', function($table)
        {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->mediumInteger('rep_fk')->unsigned()->index();
            $table->foreign('rep_fk')->references('id')->on('rep');
            $table->text('comment');
            $table->tinyInteger('fl_f')->default('0')->unsigned();
            $table->tinyInteger('fl_o')->default('0')->unsigned();
            $table->tinyInteger('fl_i')->default('0')->unsigned();
            $table->integer('like')->defualt('0')->unsigned();
            $table->timestamps();
        });

        # comment on user
        Schema::create('u_com', function ($table) {
            $table->integer('u_fk')->unsigned()->index();
            $table->foreign('u_fk')->references('id')->on('user');
            $table->integer('commentor_fk')->unsigned()->index();
            $table->foreign('commentor_fk')->references('id')->on('user');
            $table->text('comment');
            $table->tinyInteger('fl_o')->default('0')->unsigned();
            $table->tinyInteger('fl_f')->default('0')->unsigned();
            $table->tinyInteger('fl_i')->default('0')->unsigned();
            $table->integer('like')->default('0')->unsigned();
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
        Schema::drop('u_com');
        Schema::drop('rep_com');
        Schema::drop('photo_com');
        Schema::drop('ci_v_com');
        Schema::drop('ci_leg_com');
        Schema::drop('co_v_com');
        Schema::drop('co_leg_com');
        Schema::drop('s_v_com');
        Schema::drop('s_leg_com');
        Schema::drop('f_v_com');
        Schema::drop('f_leg_com');
    }
}
