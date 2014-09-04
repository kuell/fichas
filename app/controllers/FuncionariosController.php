<?php

class FuncionariosController extends BaseController {

	/**
	 * Funcionario Repository
	 *
	 * @var Funcionario
	 */
	protected $funcionario;

	protected $rules = array(
		'nome' => 'required|unique:funcionarios|min:5',
		'sexo' => 'required',
		'data_nascimento' => 'required|date',
		'endereco' => 'required',
		'bairro' => 'required',
		'fone' => 'required',
		'setor_id'=>'required'
	);

	public function __construct(Funcionario $funcionario)
	{
		$this->funcionario = $funcionario;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$funcionarios = $this->funcionario->all();

		return View::make('funcionarios.index', compact('funcionarios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('funcionarios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$validation = Validator::make($input, $this->rules);

		if ($validation->passes())
		{
			$input['idade'] = Funcionario::getIdade($input['data_nascimento']);
			$input['data_nascimento'] = date('Y-m-d', strtotime($input['data_nascimento']));

			print_r($input);
			die;

			$registro = $this->funcionario->create($input);

			$this->logFuncionarioSetor( $input['setor_id'], $registro->id );

			return Redirect::route('funcionarios.index');
		}

		return Redirect::route('funcionarios.create')
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
	public function show($id)
	{
		$funcionario = $this->funcionario->findOrFail($id);

		return View::make('funcionarios.show', compact('funcionario'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$funcionario = $this->funcionario->find($id);

		if (is_null($funcionario))
		{
			return Redirect::route('funcionarios.index');
		}

		return View::make('funcionarios.edit', compact('funcionario'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');

		$this->rules['nome'] = 'required|unique:funcionarios,nome,'.$id.'|min:5';

		$validation = Validator::make($input, $this->rules);

		if ($validation->passes())
		{
			$funcionario = $this->funcionario->find($id);
			$funcionario->update($input);

			$this->logFuncionarioSetor( $input['setor_id'], $id );

			return Redirect::route('funcionarios.index');
		}

		return Redirect::route('funcionarios.edit', $id)
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
	public function destroy($id)
	{
		$funcionario = $this->funcionario->find($id);
		$funcionario->situacao = 'demitido';
		$funcionario->update();

		return Redirect::route('funcionarios.index');
	}

	public function logFuncionarioSetor( $setor, $funcionario){

			$funcSetor = new Funcionario_setor();
			$funcSetor->setor_id = $setor;
			$funcSetor->funcionario_id = $funcionario;

			$funcSetor->save();

	}

}
