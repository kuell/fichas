<?php

class Funcionario extends Eloquent {
	protected $guarded = array();

	public function setors(){
		return $this->hasMany('Funcionario_setor');
	}

	public function estrutura(){
		return $this->belongsTo('FuncionarioEstrutura');
	}

	public function getIdadeAttribute(){
		$idade = date('Y-m-d') - $this->attributes['data_nascimento'];
		return $idade;
	}

	public function getDataNascimentoAttribute(){
		$d = explode('-', $this->attributes['data_nascimento']);

		return $d[2].'/'.$d[1].'/'.$d[0];
	}

	

}
