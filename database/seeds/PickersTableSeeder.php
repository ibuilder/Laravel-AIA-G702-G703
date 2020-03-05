<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PickersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pickers')->insert([
            'name' => 'Not Assigned',
            'deleted' => 0
        ]);
        
    }
}
