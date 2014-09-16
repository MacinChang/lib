<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBook extends Migration {

	/**
	 * Run the migrations.IDDAPcYb
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book', function(Blueprint $table)
		{
			$table->increments('id');
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
		Schema::drop('book');
	}

}
