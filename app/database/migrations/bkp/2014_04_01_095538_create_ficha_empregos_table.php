<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFichaEmpregosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficha_empregos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ficha_id')->unsigned();
				$table->foreign('ficha_id')->references('id')->on('fichas');
			$table->string('empresa');
			$table->string('cargo');
			$table->date('data_admissao');
			$table->date('data_demissao');
			$table->text('motivo');
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
		Schema::drop('ficha_empregos');
	}

}
