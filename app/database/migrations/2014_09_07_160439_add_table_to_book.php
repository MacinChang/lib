<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableToBook extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('book', function(Blueprint $table)
		{
			$table -> string('name');
			$table -> string('author');
			$table -> unsignedInteger('states');
			$table -> string('detail');
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
		Schema::table('book', function(Blueprint $table)
		{
			//
		});
	}

}
