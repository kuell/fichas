<?php

class Ficha extends Eloquent {
	protected $guarded = array();

	public function instrucao(){
		return $this->hasMany("FichaInstrucao", 'ficha_id');
	}

	public function cursos(){
		return $this->hasMany('FichaCurso', 'ficha_id');
	}

	public function empregos(){
		return $this->hasMany('FichaEmprego', 'ficha_id');
	}

	public function parentes(){
		return $this->hasMany('FichaParente', 'ficha_id');
	}

	public function setors(){
		return $this->hasMany('FichaSetor', 'ficha_id');
	}

	public function getEstadoCivilAttribute(){
		switch ($this->attributes['estado_civil']) {
			case '0':
					return "Solteiro";
				break;
			case '1':
					return "Casado";
				break;
			case '3':
					return "Viuvo";
				break;
			case '4':
					return "Amasiado";
				break;
			case '5':
					return "Divorciado";
				break;
			case '6':
					return "Desquitado";
				break;
		}
	}

	public function getSexoAttribute(){
		if($this->attributes['sexo']){
			return 'Feminino';
		}
		else{
			return 'Masculino';
		}
	}

	public function setPretencaoAttribute($pretencao){
		$num = str_replace(',', '.', str_replace('.', '', $pretencao));
		return $this->attributes['pretencao'] = $num;
	}

	public function getPretencaoAttribute(){
		return number_format($this->attributes['pretencao'], 2, ',', '.');
	}

	public function getIdadeAttribute(){
		return date('Y-m-d') - $this->attributes['data_nascimento'];
	}

	public function getDataNascimentoAttribute(){
		$d = explode('-', $this->attributes['data_nascimento']);
		return $d[2].'/'.$d[1].'/'.$d[0];
	}
}
