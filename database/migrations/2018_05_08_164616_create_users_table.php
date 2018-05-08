<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username', 45);
			$table->string('email', 45)->nullable();
			$table->text('password', 65535);
			$table->string('phone', 45)->nullable();
			$table->string('address')->nullable();
			$table->date('updated_at')->nullable();
			$table->date('created_at')->nullable();
			$table->string('remember_token')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
