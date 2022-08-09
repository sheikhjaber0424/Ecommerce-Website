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
            ],
            [
                'name' => 'Sony Mobile',
                'price' => '25000 Tk',
                'description' =>'Newly released Sony smartphone',
                'category' => 'mobile',
                'gallery'=> 'https://sc04.alicdn.com/kf/H358abbb81ea54f23b71deb0d6368089eP.jpg'
            ],
            [
                'name' => 'Sony Mobile',
                'price' => '25000 Tk',
                'description' =>'Newly released Sony smartphone',
                'category' => 'mobile',
                'gallery'=> 'https://sc04.alicdn.com/kf/H358abbb81ea54f23b71deb0d6368089eP.jpg'
            ],
            [
                'name' => 'Sony Mobile',
                'price' => '25000 Tk',
                'description' =>'Newly released Sony smartphone',
                'category' => 'mobile',
                'gallery'=> 'https://sc04.alicdn.com/kf/H358abbb81ea54f23b71deb0d6368089eP.jpg'
            ],
            [
                'name' => 'Sony Mobile',
                'price' => '25000 Tk',
                'description' =>'Newly released Sony smartphone',
                'category' => 'mobile',
                'gallery'=> 'https://sc04.alicdn.com/kf/H358abbb81ea54f23b71deb0d6368089eP.jpg'
            ],
            [
                'name' => 'Sony Plus 32"',
                'price' => '20000 Tk',
                'description' =>'Voice control 1GB/8GB Smart TV',
                'category' => 'tv',
                'gallery'=> 'https://azse77seaprodsa.blob.core.windows.net/b2b-dr-pickaboocdn/media/catalog/product/cache/a4a71470c99ce7a4925275fbc94e38e5/s/o/sony-plus-32-vioce-control-1gb-8gb-smart411.jpg'
            ],
            [
                'name' => 'Sony Plus 43"',
                'price' => '20890 Tk',
                'description' =>'Smart Double Glass 1GB/8GB LED TV',
                'category' => 'tv',
                'gallery'=> 'https://azse77seaprodsa.blob.core.windows.net/b2b-dr-pickaboocdn/media/catalog/product/cache/a4a71470c99ce7a4925275fbc94e38e5/2/4/24b_1_1.jpg'
            ],
            [
                'name' => 'Hitachi French Bottom Freezer',
                'price' => '289000 Tk',
                'description' =>'An Effortless Door Opening Experience with premium design',
                'category' => 'fridge',
                'gallery'=> 'https://transcomdigital.com/_next/image?url=https%3A%2F%2Ftranscom-storage.s3.amazonaws.com%2F2eb459e3-036e-4c2f-ac2a-2a2039c4a351%2Fddd04b35-531a-4fe0-bc10-d4103d6bf2a6%2Fe5081a14-040e-4ee7-9bb4-e6e835a8b989&w=1500&q=100'
            ],
        ]);
    }
}
