<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create the Admin.
        DB::table('users')->insert([
            'name' => 'Super-Admin',
            'email' => env('ADMIN_EMAIL_ADDRESS') ? env('ADMIN_EMAIL_ADDRESS') : "admin@examplemail.com",
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'password' => '$2y$10$JChrd7gPVXxtnT6iehBWru5sTCPjxitA2oi/M.CTWD1nj/xBBvTBy', // password
            'remember_token' => Str::random(10),
            'role' => 'admin'
        ]);
        // Create some users with the factory.
        User::factory()->times(5)->create();
    }
}