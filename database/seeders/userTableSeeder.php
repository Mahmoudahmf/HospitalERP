<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use  App\Models\User;
use Illuminate\Support\Facades\Hash;
class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->delete();
       User::create([
           'name'=>'ahemd',
           'email'=>'sfsf@yahoo.com',
           'password'=>Hash::make('212122112'),
       ]);
    }
}
