<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  App\Models\H_doctors;
use Illuminate\Support\Facades\Hash;
class H_doctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('h_doctors')->delete();
        H_doctors::create([
           'username'=>'dr_samehsalah',
           'password'=>Hash::make('11111111'),
           'title'=>'دكتور اخصائي',
           'name'=>'samehsalah',
           'role'=>'1',
           'phone'=>'3631373',
           'salary'=>'1000',
           'dept_id'=>'1',
           'room_id'=>'1',
           'status'=>'1',
           'cost'=>100,
       ]);
    }
}
