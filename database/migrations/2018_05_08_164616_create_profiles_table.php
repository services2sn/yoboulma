<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('first_name', 45);
			$table->string('middle_name', 45);
			$table->string('last_name', 45);
			$table->string('gender', 3);
			$table->date('date_birthday');
			$table->integer('identity_code');
			$table->integer('user_id')->index('user_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
