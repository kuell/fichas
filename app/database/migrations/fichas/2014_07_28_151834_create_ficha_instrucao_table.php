<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaInstrucaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficha_instrucaos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ficha_id');
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
		Schema::dropIfExists('ficha_instrucaos');
	}

}
