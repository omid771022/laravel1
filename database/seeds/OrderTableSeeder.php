<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['user_id'=>1,'title'=>'لب تاب  ایسوس مدل x','amount'=>250000,'order_id'=>10],
            ['user_id'=>2,'title'=>'مانیتور سامسونگ ','amount'=>150000,'order_id'=>10],
        ]);
    }
}
