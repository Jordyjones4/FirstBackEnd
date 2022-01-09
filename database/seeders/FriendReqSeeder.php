<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendReqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('friendreqs')->insert([
            [
                'sender'=>'1',
                'receiver'=>'2',
                'accepted'=>'True'
            ]
        ]);
    }
}
