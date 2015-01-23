<?php

class Ficha extends Eloquent {
	protected $guarded = array();

	public function instrucao() {
		return $this->hasMany("FichaInstrucao", 'ficha_id');
	}

	public function cursos() {
		return $this->hasMany('FichaCurso', 'ficha_id');
	}

	public function empregos() {
		return $this->hasMany('FichaEmprego', 'ficha_id');
	}

	public function parentes() {
		return $this->hasMany('FichaParente', 'ficha_id');
	}

	public function setors() {
		return $this->hasMany('FichaSetor', 'ficha_id');
	}

	public function getSexoAttribute() {
		if ($this->attributes['sexo']) {
			return 'Feminino';
		} else {
			return 'Masculino';
		}
	}

	public function setPretencaoAttribute($pretencao) {
		$num                                  = str_replace(',', '.', str_replace('.', '', $pretencao));
		return $this->attributes['pretencao'] = $num;
	}

	public function getPretencaoAttribute() {
		return number_format($this->attributes['pretencao'], 2, ',', '.');
	}

	public function getIdadeAttribute() {
		return date('Y-m-d')-$this->attributes['data_nascimento'];
	}

	public function getDataNascimentoAttribute() {
		$d = explode('-', $this->attributes['data_nascimento']);
		return $d[2].'/'.$d[1].'/'.$d[0];
	}

	public static function estadoCivilDesc($estado) {

		if ($estado == "") {
			return "Erro! Estado Civil vazio";
		} else {
			switch ($estado) {
				case 0:
					return 'Solteiro(a)';
					break;
				case 1:
					return 'Casado(a)';
					break;
				case 2:
					return 'Viuvo(a)';
					break;
				case 3:
					return 'Amasiado(a)';
					break;
				case 4:
					return 'Divorciado(a)';
					break;
				case 5:
					return 'Disquitado(a)';
					break;
			}
		}
	}
}
