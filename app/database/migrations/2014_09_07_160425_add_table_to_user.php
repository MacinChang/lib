<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableToUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user', function(Blueprint $table)
		{
			$table->string('name');
			$table->string('account');
			$table->string('password');
			$table->string('team');
			//
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user', function(Blueprint $table)
		{
			//
		});
	}

}
