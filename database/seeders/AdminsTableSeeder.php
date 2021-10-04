<?php

namespace Database\Seeders;
use App\Models\admins;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        admins::create([
            'name'=>'abdelkawysalah',
            'username'=>'ad_admin',
            'password'=>Hash::make('11111111'),
        ]);
    }
}
