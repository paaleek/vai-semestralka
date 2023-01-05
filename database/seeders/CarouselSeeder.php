<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carousels = [];

        $carousel1 = [
            'img_name' => 'days_gone2.jpg',
            'header' => 'Days Gone',
            'content' => 'Obuj si za&scaron;pinen&eacute; top&aacute;nky b&yacute;val&eacute;ho motork&aacute;rskeho vyhnanca Deacona St. Johna a dne&scaron;n&eacute;ho lovca odmien a sk&uacute;s v krajine obklopenej smrťou n&aacute;jsť d&ocirc;vod k životu.',
            'shop' => 'https://www.progamingshop.sk/days-gone-cz-p-362642.html?gclid=CjwKCAiAj-_xBRBjEiwAmRbqYgU2ZM9xOtyLYKlcJgkRtPzqNHkAj20OIYUqawYW67NcNf0yhq9HBhoCQTwQAvD_BwE',
            'trailer' => 'https://www.youtube.com/watch?v=FKtaOY9lMvM',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $carousel2 = [
            'img_name' => 'god_of_war2.jpg',
            'header' => 'God Of War PS4',
            'content' => 'V tomto tvrdom a neľ&uacute;tostnom svete bude musieť nielen bojovať o prežitie a z&aacute;roveň učiť svojho syna, aby dok&aacute;zal to ist&eacute;, ale tiež sa bude snažiť zabr&aacute;niť mu, aby opakoval krvou po&scaron;kvrnen&eacute; omyly, ktor&yacute;ch sa Duch Sparty dopustil.',
            'shop' => 'https://www.progamingshop.sk/god-of-war-cz-p-354041.html',
            'trailer' => 'https://www.youtube.com/watch?v=K0u_kAWLJOA',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $carousel3 = [
            'img_name' => 'watch_dogs.jpg',
            'header' => 'Watch Dogs 2',
            'content' => 'Watch Dogs je akčn&aacute; advent&uacute;ra s otvoren&yacute;m svetom, v ktorej sa vžijete do &uacute;lohy Aidena Pearca, ktor&yacute; sa snaž&iacute; pomstiť svojimi hackersk&yacute;mi a bojov&yacute;mi schopnosťami vraždu svojej netere.',
            'shop' => 'https://www.progamingshop.sk/watchdogs-2-cz-p-353960.html',
            'trailer' => 'https://www.youtube.com/watch?v=pc_U7tQwg8g',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $carousels[] = $carousel1;
        $carousels[] = $carousel2;
        $carousels[] = $carousel3;

        DB::table('carousel')->delete();
        DB::table('carousel')->insert($carousels);
    }
}
