<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionarios', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->boolean('sexo')->nullable();
			$table->date('data_nascimento');
			$table->string('idade')->nullable();
			$table->string('endereco')->nullable();
			$table->string('bairro')->nullable();
			$table->string('fone')->nullable();
			$table->string('cel')->nullable();

			$table->enum('situacao', array('ativo', 'inativo', 'demitido'))->default('ativo');
			$table->string('motivo_inativo')->nullable();
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
		Schema::dropIfExists('funcionarios');
	}

}
