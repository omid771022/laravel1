<?php

use Illuminate\Database\Seeder;

class CatgoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catgories')->insert([
            ['title'=>'اخبار ورزشی','description'=>'این  دسته اخبار ورزشی است','active'=>1],
            ['title'=>'اخبار علمی ','description'=>'این اخبار علمی است ','active'=>1],
        ]);
    }
}
