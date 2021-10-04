<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  App\Models\H_employees;
use Illuminate\Support\Facades\Hash;
class H_EmployesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('h_employees')->delete();
        H_employees::create([
           'username'=>'em_ahmedali',
           'password'=>Hash::make('11111111'),
           'name'=>'ahmedali',
           'role'=>'1',
           'phone'=>'3631373',
           'title'=>'مسئول امن',
           'status'=>'1',
           'salary'=>'1000',
       ]);
    }
}
