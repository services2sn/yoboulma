<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colis', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('objet');
			$table->text('description', 65535);
			$table->string('lieu_depart');
			$table->string('lieu_arrivee');
			$table->date('date_limite')->nullable();
			$table->string('format', 3);
			$table->string('contact');
			$table->binary('photo', 65535)->nullable();
			$table->integer('id_user')->nullable()->index('id_idx');
			$table->date('created_at')->nullable();
			$table->date('updated_at')->nullable();
			$table->string('first_price')->nullable();
			$table->string('fees')->nullable();
			$table->string('first_price_ttc')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('colis');
	}

}
