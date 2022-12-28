<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [];

        foreach (range(1, 10) as $index) {
            $new = [
                'img' => 'amd-gpu.jpg',
                'header' => 'AMD GPU',
                'main_content' => 'Vyzerá to tak, že AMD vstáva z mŕtvych a dokazujú nám to posledné čísla. Aj čo sa týka ziskovosti firmy a tržieb, tak aj dodávok čipov pre zákazníkov. V oblasti procesorov to má ľahšie, keďže Intel úplne zastal a nevie rozbehnúť novú architektúru, ale v oblasti GPU to nie je také jednoduché. Nvidia je ťažká konkurencia a AMD skôr doťahuje.
Najnovšia správa od Jon Peddie Research však ukázala, že napriek tomu mali v grafikách dobrý posledný štvrťrok minulého rok. Správa hovorí, že AMD v Q4 2019 zaznamenalo zvýšenie celkových dodávok GPU na trh o 22,6%. To znamená, že AMD má teraz na trhu GPU 19% podiel, čo je 3% nárast oproti Q3, zatiaľ čo Nvidia klesla na 18% podiel. Je to však trh všetkých grafík, ako integrovaných, tak samostatných, a teda zarátali sa tam aj AMD procesory s integrovanou grafikou. Náležite tomu však celý tento trh vedie Intel so 63% podielom, ktorý má grafiku v takmer každom procesore.Ak by sa rátali len samostatné grafiky, za posledný štvrťrok stále výrazne vedie Nvidia so 73% podielom na trhu, zatiaľ čo AMD dosiahlo 27%. Uvidíme, ako sa bude situácia vyvíjať tento rok, totiž k Nvidi a AMD sa pridá Intel so svojimi samostatnými grafikami a všetky tri firmy ukážu svoje nové technológie. Nvidia prinesie Ampere, AMD prinesie RDNA2 a Intel svoje Xe grafiky. Pre zaujímavosť, všetky budú mať raytracing.',
                'main_img' => 'amd-gpu-v.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $news[] = $new;
        }




        DB::table('news')->delete();
        DB::table('news')->insert($news);
    }
}
