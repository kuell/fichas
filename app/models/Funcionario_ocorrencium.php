<?php

class Funcionario_ocorrencium extends Eloquent {
	protected $guarded = array();
	private $data_ocorrencia;

	public static $rules = array(
		'funcionario_id' => 'required',
		'data_ocorrencia' => 'required',
		'acidente_trabalho' => 'required',
		'inativa_funcionario' => 'required'
	);

	public static function getData($dataHora){
			$d = new DateTime();
			$data = DateTime::createFromFormat('d/m/Y h:i', $dataHora);
		return $data;
	}
}
