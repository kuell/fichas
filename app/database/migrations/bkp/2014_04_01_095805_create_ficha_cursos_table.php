<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFichaCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficha_cursos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ficha_id')->unsigned();
				$table->foreign('ficha_id')->references('id')->on('fichas');
			$table->string('descricao');
			$table->string('instituicao');
			$table->integer('ano');
			$table->boolean('concluido');
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
		Schema::drop('ficha_cursos');
	}

}
