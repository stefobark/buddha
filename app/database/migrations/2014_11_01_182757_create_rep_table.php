<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropifexists('rep');
        Schema::create('rep', function($table)
        {
            $table->mediuminteger('id')->unsigned()->autoIncrement();
            $table->tinyInteger('s_fk')->unsigned()->index();
            $table->foreign('s_fk')->references('id')->on('state');
            $table->tinyInteger('p_fk')->unsigned()->index();
            $table->foreign('p_fk')->references('id')->on('party');
            $table->tinyInteger('b_fk')->unsigned()->index();
            $table->smallInteger('d_fk')->unsigned()->index();
            $table->foreign('d_fk')->references('id')->on('district');
            $table->string('lname');
            $table->string('fname');
            $table->string('phone')->nullable();
            $table->tinyInteger('position')->unsigned()->default('0');
            $table->string('email', 254)->unique();
            $table->string('href')->nullable();
            $table->string('o_addr',40)->nullable();
            $table->mediumInteger('o_po')->unsigned()->nullable();
            $table->tinyInteger('o_c_fk')->unsigned();
            $table->string('o_zip')->nullable();
            $table->string('o_phone')->nullable();
            $table->string('d_addr')->nullable();
            $table->mediumInteger('d_po')->unsigned()->nullable();
            $table->smallInteger('d_c_fk')->unsigned()->nullable()->Index();
            $table->string('d_zip')->nullable();
            $table->string('d_phone')->nullable();
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('rep');
	}
}
