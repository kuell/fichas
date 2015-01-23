<?php

class FichaSetor extends Eloquent {
	protected $guarded = array();

	public function setor(){
		return $this->belongsTo('Setor');
	}
}
