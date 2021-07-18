<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'name' => 'user01',
            'email' => 'user01@gmail.com',
            'password' => Hash::make('pirago2018')
        ]);

        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(5),
                'email' => Str::random(5).'@gmail.com',
                'password' => Hash::make('pirago2018')
            ]);
        }
    }
}
