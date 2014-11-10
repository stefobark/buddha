<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixBillid extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		    DB::statement('ALTER TABLE comments MODIFY COLUMN bill_id varchar(100)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		   DB::statement('ALTER TABLE comments MODIFY COLUMN bill_id varchar(100)');
	}

}
