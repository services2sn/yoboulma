<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCkeckingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ckecking', function(Blueprint $table)
		{
			$table->foreign('id_service', 'id_service')->references('id')->on('services')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_step', 'id_step')->references('id')->on('steps')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ckecking', function(Blueprint $table)
		{
			$table->dropForeign('id_service');
			$table->dropForeign('id_step');
		});
	}

}
