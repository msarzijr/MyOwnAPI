<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Vehicle;

use Faker\Factory as Faker;

class VehicleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0;$i<50;$i++)
        {
            $vehicle = new Vehicle();
            $vehicle->fill
            (
                [
                'color' => $faker->safeColorName(),
                'power' => $faker->randomNumber(),
                'capacity' => $faker->randomFloat(2,0,999999),
                'speed' => $faker->randomFloat(2,0,999999),
                'maker_id' => $faker->numberBetween(1,5)
                ]
            );
            $vehicle->save();

/*            Vehicle::create
            ([
                'color' => $faker->safeColorName(),
                'power' => $faker->randomNumber(),
                'capacity' => $faker->randomFloat(),
                'speed' => $faker->randomFloat(),
                'maker_id' => $faker->numberBetween(1,5)
            ]);*/
        }
    }
}
