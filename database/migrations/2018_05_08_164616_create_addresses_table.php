<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('street_number', 45);
			$table->string('street_name');
			$table->string('district', 45);
			$table->string('zipcode', 45);
			$table->string('current_position', 1);
			$table->string('additionnal_address');
			$table->integer('city_id')->index('city_id_1_idx');
			$table->string('type_address', 45);
			$table->date('date_creation');
			$table->integer('user_id')->index('user_id_idx_3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('addresses');
	}

}
