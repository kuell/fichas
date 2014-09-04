<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFichaSetorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficha_setors', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ficha_id')->unsigned();
				$table->foreign('ficha_id')->references('id')->on('fichas');
			$table->integer('setor_id')->unsigned();
				$table->foreign('setor_id')->references('id')->on('setors');
			$table->string('cargo');
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
		Schema::drop('ficha_setors');
	}

}
