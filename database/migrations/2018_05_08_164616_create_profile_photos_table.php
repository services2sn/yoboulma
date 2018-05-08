<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_photos', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('name', 45);
			$table->binary('data', 65535)->nullable();
			$table->integer('profiles_id_2')->index('profile_id_2_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profile_photos');
	}

}
