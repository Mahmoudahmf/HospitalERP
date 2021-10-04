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
        // \App\Models\User::factory(10)->create();
        $this->call(userTableSeeder::class);
        $this->call(H_DepartmentTableSeeder::class);
        $this->call(H_nursesTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(H_doctorsTableSeeder::class);
        $this->call(H_EmployesTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        
        
    }
}
