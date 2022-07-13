<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Realme Mobile',
                'price' => '20000 Tk',
                'description' =>'Newly released Realme smartphone',
                'category' => 'mobile',
                'gallery'=> 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-a50-sm-a505f-ds-3.jpg'
            ],
            [
                'name' => 'Motorola Mobile',
                'price' => '15000 Tk',
                'description' =>'Newly released Motorola smartphone',
                'category' => 'mobile',
                'gallery'=> 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1623788898-cheap-cell-phone-gallery-4-1623788892.jpg'
            ],
            [
                'name' => 'Xiaomi Mobile',
                'price' => '20000 Tk',
                'description' =>'Newly released Xiaomi smartphone',
                'category' => 'mobile',
                'gallery'=> 'https://i5.walmartimages.com/asr/c2a10a5c-8efc-44cd-b06b-6f7b6bb0b36a.bd5b93e587b2d2bfb87a7b21bf2b97e7.jpeg'
            ],
            [
                'name' => 'Sony Mobile',
                'price' => '25000 Tk',
                'description' =>'Newly released Sony smartphone',
                'category' => 'mobile',
                'gallery'=> 'https://sc04.alicdn.com/kf/H358abbb81ea54f23b71deb0d6368089eP.jpg'
            ]
        ]);
    }
}
