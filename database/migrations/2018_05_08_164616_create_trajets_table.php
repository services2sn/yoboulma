<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrajetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trajets', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('transportation_type_id')->nullable()->index('transport_type_id_idx');
			$table->integer('user_id')->nullable()->index('user_id_5_idx');
			$table->integer('registration_number')->nullable();
			$table->string('lieu_depart');
			$table->string('lieu_arrivee');
			$table->date('date_depart');
			$table->date('date_arrivee');
			$table->string('detour_max')->nullable()->default('5Km');
			$table->text('etapes', 65535)->nullable();
			$table->string('accepted_format', 3)->nullable();
			$table->string('frequence', 45)->nullable();
			$table->string('proposal_price', 45)->nullable();
			$table->date('created_at');
			$table->date('updated_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trajets');
	}

}
