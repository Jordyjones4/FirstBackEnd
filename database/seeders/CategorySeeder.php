<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            [
                'CategoryName' => 'Action'
            ],
            [
                'CategoryName' => 'Simulation'
            ],
            [
                'CategoryName' => 'Tycoon'
            ],
            [
                'CategoryName' => 'Racing'
            ],
            [
                'CategoryName' => 'Story Driven'
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}
