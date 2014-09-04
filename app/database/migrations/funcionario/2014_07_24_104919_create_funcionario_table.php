<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome');
			$table->string('funcao');
			$table->integer('cod_interno');
			$table->date('data_nascimento');
			$table->date('data_admissao');
			$table->string('ctps');
			$table->string('pis');
			$table->string('sexo', 2)->nullable();
			$table->integer('idade')->nullable();
			$table->string('bairro')->nullable();
			$table->string('fone')->nullable();
			$table->string('cel')->nullable();
			$table->integer('estrutura_id');

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
