<?php

class VotantesController extends \BaseController {

	/**
	 * Display a listing of votantes
	 *
	 * @return Response
	 */
	public function index()
	{
		$votantes = Votante::all();
		

		return View::make('votantes.index', compact('votantes'))->with('cont',1);
	}

	/**
	 * Show the form for creating a new votante
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('votantes.create');
	}

	/**
	 * Store a newly created votante in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$messages=['cedula.unique' => 'La cedula Ya esta Registrada'];
		$validator = Validator::make($data = Input::all(), Votante::$rules,$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Votante::create($data);

		return Redirect::to('/');
	}

	/**
	 * Display the specified votante.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$votante = Votante::findOrFail($id);

		return View::make('votantes.show', compact('votante'));
	}

	/**
	 * Show the form for editing the specified votante.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$votante = Votante::find($id);

		return View::make('votantes.edit', compact('votante'));
	}

	/**
	 * Update the specified votante in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$id=Input::get('id');
		$votante = Votante::findOrFail($id);
		var_dump(Input::get('cedula'));
		$rules=['nombre' => 'required'];
		$validator = Validator::make($data = Input::all(),$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if ($votante->update($data))
		{
			Session::flash('mensaje','Datos Modificados');
			return Redirect::to('/');
		}
		else
		{
			Session::flash('mensaje','Datos no Modificados');
			return Redirect::to('editarmujer'.Input::get('cedula'));
		}

		
	}

	/**
	 * Remove the specified votante from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Votante::destroy($id);

		return Redirect::route('votantes.index');
	}

}
