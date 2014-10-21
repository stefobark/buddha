<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('url', 65535)->nullable();
			$table->integer('alexa')->nullable();
			$table->integer('pagerank')->nullable();
			$table->integer('link_num')->nullable();
			$table->integer('linked_pages')->nullable();
			$table->integer('g_links')->nullable();
			$table->integer('g_links_no_www')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('seo');
	}

}
