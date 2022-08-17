<?php

namespace database\Seeders;

use Illuminate\database\Seeders;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert([
            [
            'id' => '1',
            'title' =>'1合',
            ],
            [
             'id' => '2',
            'title' =>'1.5合',    
            ],
            [
             'id' => '3',
            'title' =>'2合',    
            ],
            [
             'id' => '4',
            'title' =>'3合',    
            ],
            ]);
    }
}
