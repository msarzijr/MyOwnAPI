<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
	//| GET|HEAD  | api/vehicles                          | vehicles.index          | App\Http\Controllers\VehicleController@index        | api
	public function index()
	{
		return 'I am in index!';
	}
}