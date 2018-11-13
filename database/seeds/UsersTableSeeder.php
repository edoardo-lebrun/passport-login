<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'John Doe',
            'email' => 'demo@demo.com',
            'password' => bcrypt('secret'),
        ],
        [
            'name' => 'Mon Boe',
            'email' => 'due@due.com',
            'password' => bcrypt('secret'),
        ]
        ]);
    }
}