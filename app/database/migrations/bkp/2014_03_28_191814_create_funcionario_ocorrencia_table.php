<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncionarioOcorrenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionario_ocorrencia', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('funcionario_id');
			$table->string('motivo');
			$table->date('data_ocorrencia');
			$table->date('data_retorno');
			$table->boolean('inativa_funcionario');
			$table->text('obs');
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
		Schema::drop('funcionario_ocorrencia');
	}

}
