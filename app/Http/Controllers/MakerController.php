<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maker;

class MakerController extends Controller
{
	//| GET|HEAD  | api/makers                            | makers.index            | App\Http\Controllers\MakerController@index          | api        |
	public function index()
	{
		$makers = Maker::all();

		return response()->json(['data' => $makers], 200);
	}

	//| POST      | api/makers                            | makers.store            | App\Http\Controllers\MakerController@store          | api        |
	public function store()
	{
		# code...
	}

	//| GET|HEAD  | api/makers/{maker}                    | makers.show             | App\Http\Controllers\MakerController@show           | api        |
	public function show($id)
	{
		$maker = Maker::find($id);

		if(!$maker)
		{
			return response()->json(['message' => 'This maker does not exist!', 'code' => 404], 404);			
		}

		return response()->json(['data' => $maker], 200);
	}

	//| PUT|PATCH | api/makers/{maker}                    | makers.update           | App\Http\Controllers\MakerController@update         | api        |
	public function update($id)
	{
		# code...
	}

	//| DELETE    | api/makers/{maker}                    | makers.destroy          | App\Http\Controllers\MakerController@destroy        | api        |
	public function destroy($id)
	{
		# code...
	}

}
