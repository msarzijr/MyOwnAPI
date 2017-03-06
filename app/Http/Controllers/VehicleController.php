<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicle;

class VehicleController extends Controller
{
	//| GET|HEAD  | api/vehicles                          | vehicles.index          | App\Http\Controllers\VehicleController@index        | api
	public function index()
	{
		$vehicles = Vehicle::all();

		return response()->json(['data' => $vehicles], 200);
	}
}