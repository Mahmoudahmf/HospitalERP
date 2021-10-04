<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  App\Models\H_nurse;
use Illuminate\Support\Facades\Hash;

class H_nursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('h_nurses')->delete();
        H_nurse::create([
           'username'=>'nr_ahmed',
           'password'=>Hash::make('11111111'),
           'title'=>'ممرضة ',
           'name'=>'Aya',
           'role'=>'1',
           'phone'=>'3631373',
           'salary'=>'1000',
           'dept_id'=>'1',
           'status'=>'1',

       ]);
    }
}
