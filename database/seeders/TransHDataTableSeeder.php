<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransHDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trans_h_data')->delete();
        
        \DB::table('trans_h_data')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Data Header 1',
                'created_at' => '2023-01-28 13:16:40',
                'updated_at' => '2023-01-28 13:23:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Data Header 2',
                'created_at' => '2023-01-28 13:16:40',
                'updated_at' => '2023-01-28 13:23:25',
            ),
        ));
        
        
    }
}