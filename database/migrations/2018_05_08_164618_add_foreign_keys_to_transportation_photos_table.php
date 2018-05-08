<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransportationPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transportation_photos', function(Blueprint $table)
		{
			$table->foreign('transportation_id', 'transportation_id')->references('id')->on('trajets')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transportation_photos', function(Blueprint $table)
		{
			$table->dropForeign('transportation_id');
		});
	}

}
