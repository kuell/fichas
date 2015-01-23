<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fichas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('pretencao');
			$table->string('nome');
			$table->boolean('sexo');
			$table->date('data_nascimento');
			$table->string('naturalidade', 30);
			$table->string('nacionalidade', 30);
			$table->string('endereco');
			$table->string('bairro',30);
			$table->string('cidade', 50);
			$table->string('cep', 10);
			$table->string('fone', 14);
			$table->string('cel', 14);
			$table->string('estado_civil');
			$table->integer('filhos');
			$table->string('pai');
			$table->string('mae');
			$table->string('rg');
			$table->string('cpf', 14);
			$table->string('emissao');
			$table->string('titulo_eleitor');
			$table->string('reservista');
			$table->string('ctps');
			$table->string('pis');
			$table->integer('situacao');
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
		Schema::dropIfExists('fichas');
	}

}
