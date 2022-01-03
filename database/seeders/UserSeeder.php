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
            'name' => 'Christian Perez Chavez',
            'email' => 'christian.perez@prueba.com',
            'password' => bcrypt('00051068483')
        ])->assignRole('Admin');

        // User::factory(3)->create();
    }
}
