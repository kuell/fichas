<?php
class FichasController extends BaseController {

	/**
	 * Ficha Repository
	 *
	 * @var Ficha
	 */
	protected $ficha;

	public $rules = array(
		'pretencao'       => 'required',
		'nome'            => 'required|unique:fichas',
		'sexo'            => 'required',
		'data_nascimento' => 'required',
		'naturalidade'    => 'required',
		'nacionalidade'   => 'required',
		'endereco'        => 'required',
		'bairro'          => 'required',
		'cidade'          => 'required',
		'cep'             => 'required',
		'fone'            => 'required',
		'estado_civil'    => 'required',
		'filhos'          => 'required',
		'pai'             => 'required',
		'mae'             => 'required',
		'rg'              => 'required',
		'cpf'             => 'required',
		'emissao'         => 'required',
		'titulo_eleitor'  => 'required',
		'reservista'      => 'required',
		'ctps'            => 'required',
		'pis'             => 'required',
	);

	public function __construct(Ficha $ficha) {
		$this->ficha = $ficha;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$fichas = $this->ficha->all();

		return View::make('fichas.index', compact('fichas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('fichas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$input = Input::all()+ array('situacao' => 1);
		$validation = Validator::make($input, $this->rules);

		if ($validation->passes()) {
			$id = $this->ficha->create($input);
			return Redirect::route('fichas.edit', $id->id);
		}

		return Redirect::route('fichas.create')
		->withInput()
		->withErrors($validation)
		->with('message', 'Houve erros na validação dos dados.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$ficha = $this->ficha->findOrFail($id);
		$pdf = PDF::loadView('fichas.show2', compact('ficha'));

		return $pdf->stream();
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$ficha = $this->ficha->find($id);

		if (is_null($ficha)) {
			return Redirect::route('fichas.index');
		}

		return View::make('fichas.edit', compact('ficha'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$input = array_except(Input::all(), '_method');

		$validation = Validator::make($input, $this->rules);

		if ($validation->passes()) {
			$ficha = $this->ficha->find($id);
			$ficha->update($input);

			return Redirect::route('fichas.index', $id);
		}

		return Redirect::route('fichas.edit', $id)
		->withInput()
		->withErrors($validation)
		->with('message', 'Houve erros na validação dos dados.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$this->ficha->find($id)->delete();

		return Redirect::route('fichas.index');
	}

	/**
	* Busca as informações sobre o RG digitado
	*
	*/

	public function getInstrucao($id){
		$ficha = $this->ficha->find($id);

		return View::make('fichas.instrucao.index', compact('ficha'));
	}

	public function setInstrucao($id){
		$input = Input::all() + array('ficha_id'=>$id);
		$rules = array(
			'descricao'=>'required'
			);

		$validation = Validator::make($input, $rules);

		if($validation->passes()){
			$instrucao = new FichaInstrucao();
			$instrucao->create($input);

			return Redirect::to('fichas/'.$id.'/edit#instrucao');

		}
		return Redirect::route('fichas.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'Houve erros na validação dos dados.');
	}

	public function destroyInstrucao($id){
		$instrucao = FichaInstrucao::find($id);
		$ficha_id = $instrucao->ficha_id;

		$instrucao->delete();

		return Redirect::to('/fichas/'.$ficha_id.'/edit#instrucao');
	}

	public function getCursos($id){
		$ficha = $this->ficha->find($id);

		return View::make('fichas.cursos.index', compact('ficha'));
	}

	public function setCursos($id){
		$input = Input::all() + array('ficha_id'=>$id);
		$rules = array(
			'descricao'=>'required'
			);

		$validation = Validator::make($input, $rules);

		if($validation->passes()){
			$curso = new FichaCurso();
			$curso->create($input);

			return Redirect::to('fichas/'.$id.'/edit#cursos');

		}
		return Redirect::to('fichas/'.$id.'/edit#cursos')
			->withInput()
			->withErrors($validation)
			->with('message', 'Houve erros na validação dos dados.');
	}

	public function destroyCursos($id){
		$curso = FichaCurso::find($id);
		$ficha_id = $curso->ficha_id;

		$curso->delete();

		return Redirect::to('/fichas/'.$ficha_id.'/edit#cursos');
	}


	public function getEmpregos($id){
		$ficha = $this->ficha->find($id);

		return View::make('fichas.empregos.index', compact('ficha'));
	}

	public function setEmpregos($id){
		$input = Input::all() + array('ficha_id'=>$id);
		$rules = array(
			'empresa'=>'required'
			);

		$validation = Validator::make($input, $rules);

		if($validation->passes()){
			$emprego = new FichaEmprego();
			$emprego->create($input);

			return Redirect::to('fichas/'.$id.'/edit#empregos');

		}
		return Redirect::to('fichas/'.$id.'/edit#empregos')
			->withInput()
			->withErrors($validation)
			->with('message', 'Houve erros na validação dos dados.');
	}

	public function destroyEmpregos($id){
		$emprego = FichaEmprego::find($id);
		$ficha_id = $emprego->ficha_id;

		$emprego->delete();

		return Redirect::to('/fichas/'.$ficha_id.'/edit#empregos');
	}


	public function getParentes($id){
		$ficha = $this->ficha->find($id);

		return View::make('fichas.parentes.index', compact('ficha'));
	}

	public function setParentes($id){
		$input = Input::all() + array('ficha_id'=>$id);
		$rules = array(
			
			);

		$validation = Validator::make($input, $rules);

		if($validation->passes()){
			$parente = new FichaParente();
			$parente->create($input);

			return Redirect::to('fichas/'.$id.'/edit#parentes');

		}
		return Redirect::to('fichas/'.$id.'/edit#parentes')
			->withInput()
			->withErrors($validation)
			->with('message', 'Houve erros na validação dos dados.');
	}

	public function destroyParentes($id){
		$parente = FichaParente::find($id);
		$ficha_id = $parente->ficha_id;

		$parente->delete();

		return Redirect::to('/fichas/'.$ficha_id.'/edit#parentes');
	}

	public function getSetors($id){
		$ficha = $this->ficha->find($id);

		return View::make('fichas.setors.index', compact('ficha'));
	}

	public function setSetors($id){
		$input = Input::all() + array('ficha_id'=>$id);
		$rules = array(
			
			);

		$validation = Validator::make($input, $rules);

		if($validation->passes()){
			$setor = new FichaSetor();
			$setor->create($input);

			return Redirect::to('fichas/'.$id.'/edit#setors');

		}
		return Redirect::to('fichas/'.$id.'/edit#setors')
			->withInput()
			->withErrors($validation)
			->with('message', 'Houve erros na validação dos dados.');
	}

	public function destroySetors($id){
		$setor = FichaSetor::find($id);
		$ficha_id = $setor->ficha_id;

		$setor->delete();

		return Redirect::to('/fichas/'.$ficha_id.'/edit#setors');
	}

	public function buscaRg() {

		$ficha = Ficha::where('rg', '=', Input::get('rg'))->get();

		return Response::json($ficha);
	}

}
