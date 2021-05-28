<?php

namespace Database\Seeders;

use App\Models\status;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        \App\Models\product::factory(5)->create();
        \App\Models\category::factory(5)->create();


        User::create([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@admin.com',
            'phone' => 1234567890,
            'password' => bcrypt('admin2021'),
            'is_admin' => 1,
            ]);

        status::create([
            'id' => 1,
            "state" => "en attente"
        ]);
        status::create([
            'id' => 2,
            "state" => "Accepted"
        ]);
        status::create([
            'id' => 3,
            "state" => "Rejected"
        ]);
        status::create([
            'id' => 4,
            "state" => "Done"
        ]);

            
    }
}
