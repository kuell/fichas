<?php

class FichaInstrucao extends Eloquent {
	protected $guarded = array();
	protected $table = 'ficha_instrucaos';

	public function getConcluidoAttribute(){
		if($this->attributes['concluido']){
			return 'Sim';
		}
		else{
			return 'Não';
		}
	}
}
