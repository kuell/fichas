<?php

class SetorsController extends BaseController {

	/**
	 * Setor Repository
	 *
	 * @var Setor
	 */
	protected $setor;
	protected $rules = array(
				            'descricao' => 'required|unique:setors',
            				'supervisor'=>'required'
        					);

	public function __construct(Setor $setor)
	{
		$this->setor = $setor;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$setors = $this->setor->all();

		return View::make('setors.index', compact('setors'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('setors.create');
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
			$this->setor->create($input);

			return Redirect::route('setors.index');
		}

		return Redirect::route('setors.create')
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
		$setor = $this->setor->findOrFail($id);

		return View::make('setors.show', compact('setor'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$setor = $this->setor->find($id);

		if (is_null($setor))
		{
			return Redirect::route('setors.index');
		}

		return View::make('setors.edit', compact('setor'));
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

		$this->rules['descricao'] = 'required|unique:setors,descricao,'.$id;

		$validation = Validator::make($input, $this->rules);

		if ($validation->passes())
		{
			$setor = $this->setor->find($id);
			$setor->update($input);

			return Redirect::route('setors.index');
		}

		return Redirect::route('setors.edit', $id)
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
		$this->setor->find($id)->delete();

		return Redirect::route('setors.index');
	}

}
