<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncionarioSetorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionario_setors', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('setor_id')->unsigned();
				$table->foreign('setor_id')->references('id')->on('setors');
			$table->integer('funcionario_id')->unsigned();
				$table->foreign('funcionario_id')->references('id')->on('funcionarios');
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
		Schema::drop('funcionario_setors');
	}

}
