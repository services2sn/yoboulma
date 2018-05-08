<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransportationPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transportation_photos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45);
			$table->integer('transportation_id')->index('transportation_id_idx');
			$table->binary('data', 65535);
			$table->date('date_creation');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transportation_photos');
	}

}
