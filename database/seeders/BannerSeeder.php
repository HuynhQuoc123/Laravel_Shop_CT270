<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bannerRecords = [
            ['id' => 1, 'image' => 'slider1.jpg'],   
            ['id' => 2, 'image' => 'slider2.jpg'], 
            ['id' => 3, 'image' => 'slider3.jpg'],      
            
        ];
        Banner::insert($bannerRecords);
    }
}