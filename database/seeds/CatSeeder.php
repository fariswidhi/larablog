<?php

use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
        	'category'=>'blackberry'
        	]);
        DB::table('category')->insert([
        	'category'=>'yahoo'
        ]);
        DB::table('category')->insert([
        	'category'=>'nokia'
        	]);
        DB::table('category')->insert([
        	'category'=>'travekoka'
        ]);
        DB::table('category')->insert([
        	'category'=>'gojek'
        	]);
        DB::table('category')->insert([
        	'category'=>'yahoo'
        ]);
    }
}
