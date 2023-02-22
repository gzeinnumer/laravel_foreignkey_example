<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransDDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trans_d_data')->delete();
        
        \DB::table('trans_d_data')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_data' => 1,
                'name' => 'Data Detail 1',
                'created_at' => '2023-01-28 13:24:20',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_data' => 2,
                'name' => 'Data Detail 2.1',
                'created_at' => '2023-01-28 13:24:20',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'id_data' => 2,
                'name' => 'Data Detail 2.2',
                'created_at' => '2023-01-28 13:24:20',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'id_data' => 2,
                'name' => 'Data Detail 2.3',
                'created_at' => '2023-01-28 13:24:20',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}