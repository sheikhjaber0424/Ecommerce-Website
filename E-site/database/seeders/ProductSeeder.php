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
                'name' => 'Razer DeathAdder Essential Lightsync Gaming Mouse',
                'price' => '1699৳',
                'description' =>'Wired mouse with Five independently programmable Hyperesponse buttons',
                'category' => 'mouse',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/mouse/razer/deathadder-essetial/deathadder-essential-500x500.jpg'
            ],
            [
                'name' => 'Logitech G502 Lightspeed HERO Sensor Lightsync RGB Wireless Mouse',
                'price' => '11200৳',
                'description' =>'Wireless 11 Fully Programmable Buttons with on-Board Memory ',
                'category' => 'mouse',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/mouse/logitech/g502-lightspeed/g502-lightspeed-001-500x500.jpg'
            ],
            [
                'name' => 'Logitech G903 Lightspeed HERO RGB Wireless Gaming Mouse',
                'price' => '11000৳',
                'description' =>'Lightspeed wireless mouse with 200 - 12,000 dpi',
                'category' => 'mouse',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/mouse/logitech/g903-lightspeed/g903-lightspeed-01-500x500.jpg'
            ],
            [
                'name' => 'Logitech Signature M650 light weight Wireless Mouse',
                'price' => '3299৳',
                'description' =>'Weight: 101.2 g - weight includes a battery (25g) and receiver (1.8g) Up to 24 months battery life',
                'category' => 'mouse',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/mouse/logitech/m650/m650-01-500x500.jpg'
            ],
            [
                'name' => 'NZXT Lift Lightweight Ambidextrous RGB Optical Gaming Mouse',
                'price' => ' 4700৳',
                'description' =>'User selected RGB skirt lighting (using CAM Software) with polling rate 500Hz-1000Hz',
                'category' => 'mouse',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/mouse/nzxt/lift/lift-black-01-500x500.jpg'
            ],
            [
                'name' => 'Asus VP249QGR 23.8" 144 Hz Full HD Gaming Monitor',
                'price' => '26500৳',
                'description' =>'The ASUS VP249QGR gaming display is built for victory in the professional gaming arena',
                'category' => 'monitor',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/monitor/asus/vp249qgr/vp249qgr-500x500.jpg'
            ],
            [
                'name' => 'Viewsonic VX2458-C-MHD 24" FHD 144Hz Curved Gaming Monitor',
                'price' => '26400৳',
                'description' =>'Along an 1800R screen curvature, VX2458-C-mhd offers a truly immersive viewing experience that lets user enjoy big, bold and stunning panoramic views.',
                'category' => 'monitor',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/monitor/viewsonic/vx2481-mh/vx2481-mh-500x500.jpg'
            ],
            [
                'name' => 'MSI Optix G241 23.8" 144Hz 1ms FreeSync Full HD Gaming Monitor',
                'price' => '24500৳',
                'description' =>'Visualize victory with the MSI Optix G241 eSports gaming monitor. Equipped with a 1920x1080, 144hz Refresh rate',
                'category' => 'monitor',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/monitor/msi/optix-g241-24/optix-g241-24-500x500.jpg'
            ],
            [
                'name' => 'MSI Modern MD241PW 23.8 Inch FHD IPS Type-C Monitor',
                'price' => '24000৳',
                'description' =>'MSI Modern MD241PW features emphasize form, function, and comfort with exceptional color accuracy.',
                'category' => 'monitor',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/monitor/msi/modern-md241pw/md241pw-01-500x500.jpg'
            ],
            [
                'name' => 'HP Omen Wired Gaming Headset with SteelSeries Black ',
                'price' => '4000৳',
                'description' =>'Hear the key frequencies important to competitive gaming and never miss a critical sound',
                'category' => 'headphone',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/Accessories/HP%20Accssories/Headphone/HP%20Omen%20Wired%20Gaming%20Headset/OMEN-500x500.jpg'
            ],
            [
                'name' => 'Vertux Comando High Performance Mechanical Gaming Keyboard',
                'price' => '6690৳',
                'description' =>'Feel the rush with each keystroke using the 104-key keyboard, Commando.',
                'category' => 'Keyboard',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/keyboard/vertux/comando/vertux-comando-gaming-keyboard-01-500x500.png'
            ],
            [
                'name' => 'Dareu EK87 Mechanical Gaming Keyboard RGB (Black)',
                'price' => '2,799৳',
                'description' =>'This keyboard is customized from a full spectrum of approximately 16.8 million colors and there are eleven light effect mode options.',
                'category' => 'Keyboard',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/keyboard/dareu/ek87/ek87-01-500x500.jpg'
            ],
            [
                'name' => 'Vertux Comando High Performance Mechanical Gaming Keyboard',
                'price' => '6690৳',
                'description' =>'Feel the rush with each keystroke using the 104-key keyboard, Commando.',
                'category' => 'Keyboard',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/keyboard/vertux/comando/vertux-comando-gaming-keyboard-01-500x500.png'
            ],
            [
                'name' => 'Rapoo V500 PRO USB Mechanical Gaming Keyboard Cyan Blue',
                'price' => '3500৳',
                'description' =>'The Rapoo V500PRO Backlit Mechanical Gaming Keyboard comes with 87 keys mechanical keyboard',
                'category' => 'Keyboard',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/keyboard/rapoo/v500pro/cyan-blue/v500-pro-cyan-blue-01-500x500.jpg'
            ],
            [
                'name' => 'Rapoo V500 PRO Backlit USB Mechanical Gaming Keyboard Purple',
                'price' => '3550৳',
                'description' =>'The Rapoo V500PRO Backlit Mechanical Gaming Keyboard comes with 87 keys mechanical keyboard',
                'category' => 'Keyboard',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/keyboard/rapoo/v500pro/purple/v500-pro-purple-01-500x500.jpg'
            ],
            [
                'name' => 'Dell AW568 Alienware Advanced Gaming Keyboard',
                'price' => '6800৳',
                'description' =>'Iconic Alienware design with AlienFX 16.8M RGB Ambient Lighting',
                'category' => 'Keyboard',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/keyboard/dell/aw568/aw568-500x500.png'
            ],
            [
                'name' => 'Logitech G413 Mechanical Gaming Keyboard',
                'price' => '7599৳',
                'description' =>'Wired mechanical Gaming Keyboard with 7 million key press switch life',
                'category' => 'Keyboard',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/Accessories/Logitech/Keyboard/g413/g413-keyboard-500x500.png'
            ],
            [
                'name' => 'Lenovo IdeaPad D330 10IGL Intel CDC N4020 10.1" HD Touch Laptop',
                'price' => '39000৳',
                'description' =>'he Ideapad D330 has computing power and all the fun and mobility of a lightweight tablet',
                'category' => 'laptop',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/d330/d330-1-500x500.jpg'
            ],
            [
                'name' => 'Dell Inspiron 15 3510 Intel Celeron N4020 15.6" HD Laptop',
                'price' => '43500৳',
                'description' =>'Dell Inspiron 15 3510 comes with Intel Celeron Dual Core N4020 (4MB Cache, 1.10 GHz Up To 2.80 GHz) Processor and Intel UHD Graphics 600.',
                'category' => 'laptop',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/slim-3i/slim-3i-001-500x500.jpg'
            ],
            [
                'name' => 'PlayStation 5 DualSense Wireless Controller - Cosmic Red',
                'price' => '7150৳',
                'description' =>'The Latest PlayStation 5 DualSense Wireless Controller.',
                'category' => 'Gamepad',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/game-pad/sony/dualsense/dualsense-10-500x500.jpg'
            ],
            [
                'name' => 'Logitech F710 Wireless Gamepad',
                'price' => '5399৳',
                'description' =>'Discover a new level of feedback you can feel with every hit, crash and explosion in games that support vibration feedback.',
                'category' => 'Gamepad',
                'gallery'=> 'https://www.startech.com.bd/image/cache/data/f710-500x500.png'
            ],
            [
                'name' => 'Microsoft Xbox One X 12Gb RAM,1TB Gaming Console',
                'price' => '5399৳',
                'description' =>'The latest price of Microsoft Xbox One X Gaming Console is in Bangladesh',
                'category' => 'Console',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/gadget/gaming-console/xbox/microsoft/xbox-one-x/xbox-one-x-3-500x500.jpg'
            ],
            [
                'name' => 'Sony PlayStation 5 Digital Edition Gaming Console',
                'price' => '82000৳',
                'description' =>'Sony PlayStation 5 Digital Edition is another iteration of the classic Sony PlayStation 5 Gaming Console.',
                'category' => 'Console',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/gaming-console/playstation/playstation-5-digital-edition/sony-playstation-5-digital-edition-01-500x500.jpg'
            ],
            [
                'name' => 'Gigabyte GeForce GTX 1660 Super OC 6GB Graphics Card',
                'price' => '49000৳',
                'description' =>'Gigabyte GeForce GTX 1660 Super is here to take your gaming to the next level',
                'category' => 'card',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/graphics-card/gigabyte/geforce-gtx-1660-super/geforce-gtx-1660-super-500x500.jpg'
            ],
            [
                'name' => 'Gigabyte GeForce RTX 3050 EAGLE 8GB GDDR6 Graphics Card',
                'price' => '45,500৳',
                'description' =>'The Gigabyte GeForce RTX 3050 EAGLE 8GB Graphics Card comes with some special features.',
                'category' => 'card',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/graphics-card/gigabyte/rtx-3050-eagle-8g/rtx-3050-eagle-8g-01-500x500.jpg'
            ],
        ]);
    }
}
