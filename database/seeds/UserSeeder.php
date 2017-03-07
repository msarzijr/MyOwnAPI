<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->fill
        (
            [
            'email' => 'fake@fake.com',
            'password' => Hash::make('pass')
            ]
        );
        $user->save();
    }
}
