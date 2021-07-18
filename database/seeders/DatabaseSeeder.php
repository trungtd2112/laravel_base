<?php

namespace Database\Seeders;

use App\Entities\Admin as EntitiesAdmin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Entities\User;
use App\Entities\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AdminSeeder::class
        ]);
    }
}
