<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'email' => 'k.mahenge@gmail.com',
            'firstname' => 'Kanai',
            'lastname' => 'Lomayani',
            'phone' => '0757834023',
            'password' => Hash::make('123'),
            'created_by' => 1
        ]);
        User::factory()->count(50)->make();
    }
}
