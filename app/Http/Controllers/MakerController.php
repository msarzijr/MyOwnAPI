<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakerController extends Controller
{
	//| GET|HEAD  | api/makers                            | makers.index            | App\Http\Controllers\MakerController@index          | api        |
	public function index()
	{
		return 'I am in index!';
	}

	//| POST      | api/makers                            | makers.store            | App\Http\Controllers\MakerController@store          | api        |
	public function store()
	{
		# code...
	}

	//| GET|HEAD  | api/makers/{maker}                    | makers.show             | App\Http\Controllers\MakerController@show           | api        |
	public function show($id)
	{
		# code...
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
