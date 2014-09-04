<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFichaParentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficha_parentes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ficha_id')->unsigned();
				$table->foreign('ficha_id')->references('id')->on('fichas');
			$table->string('nome');
			$table->integer('setor_id')->unsigned();
				$table->foreign('setor_id')->references('id')->on('setors');
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
		Schema::drop('ficha_parentes');
	}

}
