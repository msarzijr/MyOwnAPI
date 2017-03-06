<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Maker;
use App\Vehicle;
use App\Http\Requests\CreateVehicleRequest;

class MakerVehicleController extends Controller
{
	//| GET|HEAD  | api/makers/{maker}/vehicles           | makers.vehicles.index   | App\Http\Controllers\MakerVehicleController@index   | api        |
	public function index($makerId)
	{
		$maker = Maker::find($makerId);

		if(!$maker)
		{
			return response()->json(['message' => 'This maker does not exist!', 'code' => 404], 404);			
		}

		return response()->json(['data' => $maker->vehicles], 200);
	}
	
	//| POST      | api/makers/{maker}/vehicles           | makers.vehicles.store   | App\Http\Controllers\MakerVehicleController@store   | api        |
	public function store(CreateVehicleRequest $request, $makerId)
	{
		$maker = Maker::find($makerId);

		if(!$maker)
		{
			return response()->json(['message' => 'This maker does not exist!', 'code' => 404], 404);			
		}

		$values = $request->all();
		$values['maker_id'] = $makerId;

		//$maker->vehicles()->create($values);
		$vehicle = new Vehicle();
		$vehicle->fill($values);
        $vehicle->save();

		return response()->json(['message' => 'Vehicle corretly added!', 'code' => 201], 201);
	}

	//| GET|HEAD  | api/makers/{maker}/vehicles/{vehicle} | makers.vehicles.show    | App\Http\Controllers\MakerVehicleController@show    | api        |
	public function show($makerId, $vehicleId)
	{
		$maker = Maker::find($makerId);

		if(!$maker)
		{
			return response()->json(['message' => 'This maker does not exist!', 'code' => 404], 404);			
		}

		$vehicle = $maker->vehicles->find($vehicleId);

		if(!$vehicle)
		{
			return response()->json(['message' => 'This vehicle for that maker does not exist!', 'code' => 404], 404);			
		}


		return response()->json(['data' => $vehicle], 200);
	}

	//| PUT|PATCH | api/makers/{maker}/vehicles/{vehicle} | makers.vehicles.update  | App\Http\Controllers\MakerVehicleController@update  | api        |
	public function update(CreateVehicleRequest $request, $makerId, $vehicleId)
	{
		$maker = Maker::find($makerId);

		if(!$maker)
		{
			return response()->json(['message' => 'This maker does not exist!', 'code' => 404], 404);			
		}

		$vehicle = $maker->vehicles->find($vehicleId);

		if(!$vehicle)
		{
			return response()->json(['message' => 'This vehicle for that maker does not exist!', 'code' => 404], 404);			
		}

		$values = $request->all();
		$values['maker_id'] = $makerId;
		$values['serie'] = $vehicleId;

		$vehicle->fill($values);
        $vehicle->save();

		return response()->json(['message' => 'The vehicle has been updated!', 'code' => 200], 200);
	}

	//| DELETE    | api/makers/{maker}/vehicles/{vehicle} | makers.vehicles.destroy | App\Http\Controllers\MakerVehicleController@destroy | api        |
	public function destroy($id)
	{
		# code...
	}

}
