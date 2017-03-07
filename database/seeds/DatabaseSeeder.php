<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Maker;
use App\Vehicle;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    	Vehicle::truncate();
    	Maker::truncate();
        User::truncate();
        //Model::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    	
        $this->call('MakerSeed');
        $this->call('VehicleSeed');
        $this->call('UserSeed');
    }
}
