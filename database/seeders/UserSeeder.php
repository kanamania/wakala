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
            'agent_name' => 'Jacob Emanuel Mahenge',
            'agent_number' => '564511',
            'street' => 'Nane nane',
            'ward' => 'Lemara',
            'district_id' => 1,
            'password' => Hash::make('123'),
            'email_verified_at' => now()
        ]);
        User::factory()->count(50)->make();
    }
}
