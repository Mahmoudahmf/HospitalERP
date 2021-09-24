<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  App\Models\H_rooms;
class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('h_rooms')->delete();
        H_rooms::create([
            'room_number'=>'1',
            'druation'=>'20',
            'status'=>'1',
            'nurse_id'=>'1'
        ]);
    }
}
