<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Member::factory()->count(50)
        // ->state(new Sequence(
        //     ['role' => 'Admin'],
        //     ['role' => 'Member'],
        // ))
        // ->create();
        DB::table('users')->insert([
            [
                'username'=>'Gamer',
                'fullname'=>'Idk some guy',
                'password'=> Hash::make('aaaa'),
                'role'=>'Member'
            ],
            [
                'username'=>'Gamer2',
                'fullname'=>'Idk some guy',
                'password'=>Hash::make('abcd'),
                'role'=>'Member'
            ],
            [
                'username'=>'Admin',
                'fullname'=>'Idk some guy',
                'password'=>Hash::make('abcd'),
                'role'=>'Admin'
            ]
        ]);
    }
}
