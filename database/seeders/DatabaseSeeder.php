<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use App\Models\State;
use Carbon\Carbon; //For date
use Illuminate\Support\Facades\Hash; //For Hashing before save 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        //Admin integrated Explicitly inside our UMS
        User::create([
            'username' => 'Mustafa1121',
            'last_name' => 'Khodor',
            'first_name' => 'Mustafa',
            'email' => 'mustafakhodor2@gmail.com',
            'password' => Hash::make('123456789'),
        ]);

        Country::create([
            'country_code' => '961',
            'name' => 'Lebanon'
        ]);

        Department::create([
            'name' => 'Mern Stack'
        ]);


        Department::create([
            'name' => 'Larvel Developer'
        ]);


        State::create([
            'country_id' => '1',
            'name' => 'Tripoli'
        ]);

        State::create([
            'country_id' => '1',
            'name' => 'Beirut'
        ]);

        City::create([
            'state_id' => '1',
            'name' => 'Mina'
        ]);

        City::create([
            'state_id' => '2',
            'name' => 'Jemayze'
        ]);

        Employee::create([
            'last_name' => 'Fleifel',
            'first_name' => 'Ibrahim',
            'middle_name' => 'Father_name',
            'address' => 'Beirut-Hamra',
            'department_id' => '2',
            'country_id' => '1',
            'state_id' => '2',
            'city_id' => '2',
            'zip_code' => '113',
            'birthdate' => Carbon::create('2000', '01', '01'),
            'date_hired' => Carbon::create('2000', '01', '01')
        ]);

       





    }
}
