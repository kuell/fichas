<?php

class FichaCurso extends Eloquent {
	protected $guarded = array();

	public function getConcluidoAttribute(){
		if($this->attributes['concluido']){
			return 'Sim';
		}
		else{
			return 'Não';
		}
	}
}
