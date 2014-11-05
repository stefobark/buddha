<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropifexists('user');
        Schema::create('user', function ($table)
    {
        $table->integer('id')->unsigned()->autoIncrement();
        $table->tinyInteger('p_fk')->unsigned()->index();
        $table->foreign('p_fk')->references('id')->on('party');
        $table->smallInteger('d_fk')->unsigned()->index();
        $table->foreign('d_fk')->references('id')->on('district');
        $table->tinyInteger('s_fk')->unsigned()->index();
        $table->foreign('s_fk')->references('id')->on('state');
        $table->smallInteger('co_fk')->unsigned()->index();
        $table->foreign('co_fk')->references('id')->on('county');
        $table->smallInteger('ci_fk')->unsigned()->index();
        $table->foreign('ci_fk')->references('id')->on('city');
        $table->string('address');
        $table->string('remember_token', 100);
        $table->integer('zip');
        $table->string('password');
        $table->string('lat_long');
        $table->string('email', 254)->unique();
        $table->timestamps();
        $table->date('age');
        $table->string('lname', 20);
        $table->string('fname', 20);
    });	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('user');
	}
}
