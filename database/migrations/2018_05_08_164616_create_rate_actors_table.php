<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRateActorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rate_actors', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('notation', 45);
			$table->integer('rater')->index('user_id_2_idx');
			$table->integer('rated');
			$table->date('rating_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rate_actors');
	}

}
