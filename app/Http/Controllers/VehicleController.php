<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicle;

class VehicleController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth.basic', ['except' => ['index']]);
	}

	//| GET|HEAD  | api/vehicles                          | vehicles.index          | App\Http\Controllers\VehicleController@index        | api
	public function index()
	{
		$vehicles = Vehicle::all();

		return response()->json(['data' => $vehicles], 200);
	}
}