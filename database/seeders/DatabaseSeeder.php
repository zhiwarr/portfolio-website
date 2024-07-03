<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'zhiwar',
            'phone'=>'7708817375',
            'image'=>asset('assets/images/person_1.jpg'),
            'address'=>'halabja',
            'birthday'=>'2002-02-04',
            'cv'=>'asidjodasohsda',
            'email' => 'test@example.com',
            'password'=>bcrypt('zhiwar'),
        ]);
    }
}