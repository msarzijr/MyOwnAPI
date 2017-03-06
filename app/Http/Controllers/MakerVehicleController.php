<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakerVehicleController extends Controller
{
	//| GET|HEAD  | api/makers/{maker}/vehicles           | makers.vehicles.index   | App\Http\Controllers\MakerVehicleController@index   | api        |
	public function index($id)
	{
		return "'Showing the vehicles of maker $id!'";
	}
	
	//| POST      | api/makers/{maker}/vehicles           | makers.vehicles.store   | App\Http\Controllers\MakerVehicleController@store   | api        |
	public function store($id)
	{
		# code...
	}

	//| GET|HEAD  | api/makers/{maker}/vehicles/{vehicle} | makers.vehicles.show    | App\Http\Controllers\MakerVehicleController@show    | api        |
	public function show($id)
	{
		# code...
	}

	//| PUT|PATCH | api/makers/{maker}/vehicles/{vehicle} | makers.vehicles.update  | App\Http\Controllers\MakerVehicleController@update  | api        |
	public function update($id)
	{
		# code...
	}

	//| DELETE    | api/makers/{maker}/vehicles/{vehicle} | makers.vehicles.destroy | App\Http\Controllers\MakerVehicleController@destroy | api        |
	public function destroy($id)
	{
		# code...
	}

}
