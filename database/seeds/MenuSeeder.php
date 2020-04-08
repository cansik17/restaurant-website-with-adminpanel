<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'kind'=>'drinks',
            'firstTitle'=>'Special Drinks 1',
            'secondTitle'=>'Sed id magna vitae eros sagittis euismod.',
            'image'=>'front/images/img-01.jpg',
            'price'=>'7.79',
        ]);
        DB::table('menus')->insert([
            'kind'=>'drinks',
            'firstTitle'=>'Special Drinks 2',
            'secondTitle'=>'Sed id magna vitae eros sagittis euismod.',
            'image'=>'front/images/img-02.jpg',
            'price'=>'6.59',
        ]);
        DB::table('menus')->insert([
            'kind'=>'drinks',
            'firstTitle'=>'Special Drinks 3',
            'secondTitle'=>'Sed id magna vitae eros sagittis euismod.',
            'image'=>'front/images/img-03.jpg',
            'price'=>'9.99',
        ]);
        DB::table('menus')->insert([
            'kind'=>'lunch',
            'firstTitle'=>'Special Lunch 1',
            'secondTitle'=>'Sed id magna vitae eros sagittis euismod.',
            'image'=>'front/images/img-04.jpg',
            'price'=>'17.79',
        ]);
        DB::table('menus')->insert([
            'kind'=>'lunch',
            'firstTitle'=>'Special Lunch 2',
            'secondTitle'=>'Sed id magna vitae eros sagittis euismod.',
            'image'=>'front/images/img-05.jpg',
            'price'=>'15.79',
        ]);
        DB::table('menus')->insert([
            'kind'=>'lunch',
            'firstTitle'=>'Special Lunch 3',
            'secondTitle'=>'Sed id magna vitae eros sagittis euismod.',
            'image'=>'front/images/img-06.jpg',
            'price'=>'20.79',
        ]);   
        DB::table('menus')->insert([
            'kind'=>'dinner',
            'firstTitle'=>'Special Dinner 1',
            'secondTitle'=>'Sed id magna vitae eros sagittis euismod.',
            'image'=>'front/images/img-07.jpg',
            'price'=>'21.79',
        ]);
        DB::table('menus')->insert([
            'kind'=>'dinner',
            'firstTitle'=>'Special Dinner 2',
            'secondTitle'=>'Sed id magna vitae eros sagittis euismod.',
            'image'=>'front/images/img-08.jpg',
            'price'=>'23.79',
        ]);
        DB::table('menus')->insert([
            'kind'=>'dinner',
            'firstTitle'=>'Special Dinner 3',
            'secondTitle'=>'Sed id magna vitae eros sagittis euismod.',
            'image'=>'front/images/img-09.jpg',
            'price'=>'28.79',
        ]);

    }
}
