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
           'name'=>'abdelkawysalah',
           'username'=>'abdou2020',
           'password'=>Hash::make('11111111'),
       ]);
    }
}
