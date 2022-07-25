<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'name' => 'Category 1',
            'name' => 'Category 1',
            'name' => 'Category 2',
            'name' => 'Category 3',
            'name' => 'Category 4',
            'name' => 'Category 5',
            'name' => 'Category 6',
            'name' => 'Category 7',
            'name' => 'Category 8',
            'name' => 'Category 9',
            'name' => 'Category 10',

        ];
        foreach ($array as $value){
            Category::create(
               
            );
        }
    }
}
