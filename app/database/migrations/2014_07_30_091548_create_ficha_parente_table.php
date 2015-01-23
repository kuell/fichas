<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaParenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficha_parentes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ficha_id');
			$table->string('nome');
			$table->string('setor');
			$table->string('grau');
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
		Schema::dropIfExists('ficha_parentes');
	}

}
