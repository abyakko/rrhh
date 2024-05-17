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
            'name' => 'administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'mauro',
            'email' => 'mauro@sistemas.com',
            'password' => bcrypt('mauro')
        ])->assignRole('Administrador');
        
        User::create([
            'name' => 'richard',
            'email' => 'richard@sistemas.com',
            'password' => bcrypt('richard')
        ])->assignRole('Administrador');
    }
}
