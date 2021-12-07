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
        User::insert([[
            'Name' => 'Admin',
            'email'=>'admin@gmail.com',
            'userType'=>1,
            'password'=>Hash::make('12345678'),
        ],
    [
            'Name' => 'User',
            'email'=>'user@gmail.com',
            'userType'=>0,
            'password'=>bcrypt('12345678')
    ]
    ]);
    }
}
