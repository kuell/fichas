<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaCursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficha_cursos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ficha_id')->unsigned();
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
		Schema::dropIfExists('ficha_cursos');
	}

}
