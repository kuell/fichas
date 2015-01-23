<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaEmpregoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficha_empregos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ficha_id')->unsigned();
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
		Schema::dropIfExists('ficha_empregos');
	}

}
