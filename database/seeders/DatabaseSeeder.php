<?php

namespace Database\Seeders;

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
        $timestamp = \Carbon\Carbon::now();

        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'name'        => 'Admin',
                'email'       => 'admin@uppcl.com',
                'password'    => bcrypt('admin123'),
                //'password'    => 'admin123',
                'role'        => 'Qca',
                'phone'       => '9944887755',
                'image'       => 'null',
                'created_at'  => \Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now(),
            ]
        ]); 
    }
}