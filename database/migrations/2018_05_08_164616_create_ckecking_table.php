<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCkeckingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ckecking', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_ckecker');
			$table->integer('id_service')->index('id_service_idx');
			$table->binary('signature', 65535);
			$table->integer('id_step')->index('id_step_idx');
			$table->date('ckecking_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ckecking');
	}

}
