<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maker;
use App\Http\Requests\CreateMakerRequest;

class MakerController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth.basic', ['except' => ['index', 'show']]);
	}
	
	//| GET|HEAD  | api/makers                            | makers.index            | App\Http\Controllers\MakerController@index          | api        |
	public function index()
	{
		$makers = Maker::all();

		return response()->json(['data' => $makers], 200);
	}

	//| POST      | api/makers                            | makers.store            | App\Http\Controllers\MakerController@store          | api        |
	public function store(CreateMakerRequest $request)
	{
		$values = $request->only(['name', 'phone']);

		//$makers = Maker::create($values);
		$maker = new Maker();
        $maker->fill($values);
        $maker->save();

		return response()->json(['message' => 'Maker corretly added!', 'code' => 201], 201);
	}

	//| GET|HEAD  | api/makers/{maker}                    | makers.show             | App\Http\Controllers\MakerController@show           | api        |
	public function show($makerId)
	{
		$maker = Maker::find($makerId);

		if(!$maker)
		{
			return response()->json(['message' => 'This maker does not exist!', 'code' => 404], 404);			
		}

		return response()->json(['data' => $maker], 200);
	}

	//| PUT|PATCH | api/makers/{maker}                    | makers.update           | App\Http\Controllers\MakerController@update         | api        |
	public function update(CreateMakerRequest $request, $makerId)
	{
		$maker = Maker::find($makerId);

		if(!$maker)
		{
			return response()->json(['message' => 'This maker does not exist!', 'code' => 404], 404);			
		}

		$values = $request->only(['name', 'phone']);
		$maker->fill($values);
		$maker->save();

		return response()->json(['message' => 'The maker has been updated!', 'code' => 200], 200);
	}

	//| DELETE    | api/makers/{maker}                    | makers.destroy          | App\Http\Controllers\MakerController@destroy        | api        |
	public function destroy($makerId)
	{
		$maker = Maker::find($makerId);

		if(!$maker)
		{
			return response()->json(['message' => 'This maker does not exist!', 'code' => 404], 404);			
		}

		$vehicle = $maker->vehicles;

		if(sizeof($vehicle) > 0)
		{
			return response()->json(['message' => 'This maker has vehicles associeted! Delete his vehicles first!', 'code' => 422], 422);
		}

		$maker->delete();

		return response()->json(['message' => 'The maker has been deleted!', 'code' => 200], 200);
	}

}
