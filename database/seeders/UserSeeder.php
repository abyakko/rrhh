<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'John',
            'email'=>'john@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'mauro',
            'email'=>'mauro@gmail.com',
            'password'=>bcrypt('mauro')
        ]);
        //])->assignRole('Admin');
    }
}
