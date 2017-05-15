<?php

use Illuminate\Database\Seeder;

class ArtigoContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\ArtigoContent::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        //
    }
}
