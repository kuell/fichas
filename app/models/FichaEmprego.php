<?php

class FichaEmprego extends Eloquent {
	protected $guarded = array();

	public function getDataAdmissaoAttribute(){
		$d = explode('-', $this->attributes['data_admissao']);

		return $d[2].'/'.$d[1].'/'.$d[0];
	}

	public function getDataDemissaoAttribute(){
		$d = explode('-', $this->attributes['data_demissao']);

		return $d[2].'/'.$d[1].'/'.$d[0];
	}

	public function setDataEntradaAttribute($data_entrada){
		$d = explode('/', $data_entrada);

		return $this->attributes['data_admissao'] = $d[2].'-'.$d[1].'-'.$d[0];
	}

	public function setDataSaidaAttribute($data_saida){
		$d = explode('/', $data_saida);

		return $this->attributes['data_demissao'] = $d[2].'-'.$d[1].'-'.$d[0];
	}
}
