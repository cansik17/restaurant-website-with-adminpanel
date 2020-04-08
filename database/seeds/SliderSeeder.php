<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'order'=>1,
            'firstTitle'=>'Welcome To
                Yamifood Restaurant',
            'secondTitle'=>'See how your users experience your website in realtime or view
                trends to see any changes in performance over time',
            'image'=>'front/images/slider-01.jpg',
        ]);
        DB::table('sliders')->insert([
            'order'=>2,
            'firstTitle'=>'Welcome To
                Yamifood Restaurant',
            'secondTitle'=>'See how your users experience your website in realtime or view
                trends to see any changes in performance over time',
            'image'=>'front/images/slider-02.jpg',
        ]);
        DB::table('sliders')->insert([
            'order'=>3,
            'firstTitle'=>'Welcome To
                Yamifood Restaurant',
            'secondTitle'=>'See how your users experience your website in realtime or view
                trends to see any changes in performance over time',
            'image'=>'front/images/slider-03.jpg',
        ]);
    }
}
