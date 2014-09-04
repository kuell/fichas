<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('CorretorsTableSeeder');
		$this->call('AreasTableSeeder');
		$this->call('ClientesTableSeeder');
		$this->call('Cliente_maquinasTableSeeder');
		$this->call('MaquinasTableSeeder');
		$this->call('ChamadosTableSeeder');
		$this->call('Chamado_execucaosTableSeeder');
		$this->call('SetorsTableSeeder');
		$this->call('FuncionariosTableSeeder');
		$this->call('Funcionario_setorsTableSeeder');
		$this->call('Funcionario_ocorrenciaTableSeeder');
		$this->call('FichasTableSeeder');
		$this->call('Ficha_instrucaosTableSeeder');
		$this->call('Ficha_empregosTableSeeder');
		$this->call('Ficha_cursosTableSeeder');
		$this->call('Ficha_parentesTableSeeder');
		$this->call('Ficha_setorsTableSeeder');
		$this->call('AmorsTableSeeder');
	}

}