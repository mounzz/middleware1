<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'King Poop',
                'email' => 'kingpoop@gmail.com',
                'password' => 'kingpoop',
                'admin' => 1
            ],
            [
                'name' => 'Basic Poop',
                'email' => 'basicpoop@gmail.com',
                'password' => 'basicpoop',
                'admin' => 0
            ],
        ]);
    }
}
