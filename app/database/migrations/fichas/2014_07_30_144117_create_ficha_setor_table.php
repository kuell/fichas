<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaSetorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficha_setors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ficha_id')->unsigned();
			$table->integer('setor_id')->unsigned();
			$table->string('cargo');
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
		Schema::dropIfExists('ficha_setors');
	}

}
