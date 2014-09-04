<?php

class Funcionario_setor extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'setor_id' => 'required',
		'funcionario_id' => 'required'
	);
}
