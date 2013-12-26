<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotHappeningUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('happening_user', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('status_id')->unsigned()->index();
			$table->integer('happening_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('happening_id')->references('id')->on('happenings')->onDelete('cascade');
			$table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('happening_user');
	}

}
