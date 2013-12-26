<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sponsors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('happening_id')->unsigned();
            $table->foreign('happening_id')->references('id')->on('happenings');
			$table->string('address');
			$table->text('description');
			$table->integer('local');
			$table->string('image');
			$table->string('thumb');
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
		Schema::drop('sponsors');
	}

}
