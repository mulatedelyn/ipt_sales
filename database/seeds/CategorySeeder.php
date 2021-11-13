<?php

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
        $data = [
            [
                'category'=> "TV",
                'description'=>'All LED TVs',
            ],
            [
                'category'=> "Couch",
                'description'=>'All couch items',
            ],
            [
                'category'=> "Center-Table",
                'description'=>'All center-table items',
            ],
            
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
