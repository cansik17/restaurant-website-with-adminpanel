<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
           
            'image'=>'front/images/gallery-img-01.jpg',
            
        ]);
        DB::table('galleries')->insert([
            
            'image'=>'front/images/gallery-img-02.jpg',
            
        ]);
        DB::table('galleries')->insert([
            
            'image'=>'front/images/gallery-img-03.jpg',
            
        ]);
        DB::table('galleries')->insert([
            
            'image'=>'front/images/gallery-img-04.jpg',
            
        ]);
        DB::table('galleries')->insert([
            
            'image'=>'front/images/gallery-img-05.jpg',
            
        ]);
        DB::table('galleries')->insert([
            
            'image'=>'front/images/gallery-img-06.jpg',
            
        ]);
    }
}
