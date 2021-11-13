<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
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
                'unit_type'=> "inches",
                'description'=>'Sizes : 48" 55" 65" 77" 83"',
            ],
            [
                'unit_type'=> "set",
                'description'=>'One of the best ways to find the perfect sofa for entertaining,
                 napping and binging your favorite shows is to first narrow down the brands you like.',
            ],
            [
                'unit_type'=> "types",
                'description'=>'The second most important purchase you will make for your living room furniture,
                 after your couch and sofa, is the center table.',
            ],
           
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}