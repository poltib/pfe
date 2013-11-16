<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaceSponsorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('race_sponsors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('race_id');
			$table->string('address');
			$table->text('description');
			$table->integer('local');
			$table->string('image');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('race_sponsors');
	}

}
