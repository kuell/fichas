<?php

class ImportarController extends Controller {
	public $con;


	public function __construct(){
		$this->con = mssql_connect("10.1.1.2", "NewDMP", "NewDMP") or die("Não foi possível a conexão com o servidor");
		mssql_select_db("FRIGO") or die("Não foi possível selecionar o banco de dados");
	}

	public function importar(){
		$this->importEstrutura();
		$this->importFuncionario();
		mssql_close();
	}

	public function importEstrutura(){

		$ret = '';
		$count = 1;

		foreach (FuncionarioEstrutura::all() as $key => $value) {
			$ret .= $value['cod_interno'];
				if($count < FuncionarioEstrutura::count()){
					$count++;
					$ret .= ',';
				}
		}

		$sql = "SELECT * FROM NewDMP.ESTRUTURAORGANIZACIONAL a ";
		$result = mssql_query($sql);
 		
		while($res = mssql_fetch_object($result)) {
			$estr = new FuncionarioEstrutura;
				$estr->cod_interno = $res->CODIGOESTRUTURA;
				$estr->descricao = utf8_encode($res->ESTRUTURADESCRICAO);
			$estr->save();
		}
		
	}

	public function importFuncionario(){

		$ret = '';
		$count = 1;

		foreach (Funcionario::all() as $key => $value) {
			$ret .= $value['cod_interno'];
				if($count < Funcionario::count()){
					$count++;
					$ret .= ',';
				}
		}

		$sql = "SELECT * FROM NewDMP.FUNCIONARIOS a";
		$result = mssql_query($sql);
 		
		while($res = mssql_fetch_object($result)) {
			$func = new Funcionario;
				$func->nome = utf8_encode($res->FUNCIONARIONOME);
				$func->data_nascimento = date('Y-m-d', strtotime($res->FUNCIONARIODTNASC));
				$func->data_admissao = date('Y-m-d', strtotime($res->FUNCIONARIODTADMISSAO));
				$func->estrutura_id = $res->FUNCIONARIOESTRUTURAORGANIZACI;
				$func->funcao = utf8_encode($res->FUNCIONARIOFUNCAO);
				$func->ctps = $res->FUNCIONARIOCARTPROFISSIONAL;
				$func->pis = $res->PIS;
				$func->cod_interno = $res->FUNCIONARIOREGISTRO;

			$func->save();
		}
	}


}
