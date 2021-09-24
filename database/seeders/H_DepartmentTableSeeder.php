<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  App\Models\H_departments;
class H_DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('h_departments')->delete();
        $Departments=['قسم الجراحة','قسم العظام','قسم الباطنه','قسم الصدر'];
        foreach($Departments as $n){
                H_departments::create(['name'=>$n]);
            }

    }
}
