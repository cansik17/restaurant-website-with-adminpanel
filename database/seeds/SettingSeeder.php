<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'about'=>'Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis ultrices sit amet. Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.',
            'phone'=>'212 345 6789',
            'email'=>'info@yamifood.com',
            'address'=>'Iris Watson, Box 283 8562, NY',
            'mon'=>'Closed',
            'tue'=>'9:Am - 10PM',
            'wed'=>'9:Am - 10PM',
            'thu'=>'9:Am - 10PM',
            'fri'=>'9:Am - 10PM',
            'sat'=>'5:PM - 10PM',
            'sun'=>'5:PM - 10PM',
            'facebook'=>'#',
            'twitter'=>'#',
            'google'=>'#',
            'linkedin'=>'#',
            'instagram'=>'#',

            'created_at'=>now(),
            'updated_at'=>now(),
          ]);
    }
}
