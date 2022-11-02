<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [];

        foreach (range(1, 10) as $index) {
            $review = [
                'header' => 'Red Dead Redemtion 2',
                'small_img' => 'red_dead_m.jpg',
                'main_content' => 'Pre mnohých je to hra roka. Minimálne môžeme povedať, že veľmi úspešne pokračuje v tom, čo výborne rozohrala pôvodná westernová akcia na starej generácii konzol. A ešte pred Red Dead Redemption tu bol Red Dead Revolver, ktorý stál na úplnom začiatku. V novom titule v sérii si na svoje si prídu nielen priaznivci divokého západu, ale všetci tí, ktorí nepohrdnú vydarenými prestrelkami v otvorenom svete s opojnou vôňou dobrodružstva. Red Dead Redemption 2 skrátka páli ostrými a presne do čierneho.
Hlavným hrdinom je tentokrát sympatický drsňák Arthur Morgan. Nie je to žiadne neviniatko, rovnako ako ostatní členovia kočujúceho gangu, ktorý si hľadá svoje miesto v krajine, čo sa už začína meniť z nespútaného divokého západu na moderný a civilizovaný svet. Zatiaľ je to stále miesto plné dobrodruhov a štvancov, ale nie nadlho. A medzi nich patríte aj vy. Lenže je čas na zmenu, spolu s vašimi druhmi, ktorí putujú s konskými povozmi, cítite potrebu usadiť sa a žiť usporiadaným životom. Ibaže sa vám to akosi nedarí. Či už vďaka vlastným chybám, alebo prešľapom spoločníkov a pod vedením svojského Dutcha, nielen pri snahe získať peniaze, sa neustále dostávate do problémov. A neraz to končí krviprelievaním a následne hľadaním nového miesta, kde všetko skúsite odznova.
Provizórny tábor, ktorý priebežne mení svoju polohu, je miestom, kam sa neustále vraciate. Podobne ako v iných hrách, dokážete toto osídlenie vylepšovať a zútulňovať. Môžete darovať predmety, proviant alebo financie, ktorými podporíte fungovanie kempu a okrem toho máte možnosť prikúpiť niekoľko úprav, ktoré osožia vám aj ostatným. Na jednej strane je tábor úžasné miesto, kde cítite spriaznenosť s ostatnými ľuďmi na pokraji spoločnosti, ktorí sa rozprávajú, posedávajú pri ohni, spievajú, nahovárajú vás na rôzne aktivity. A nemusia to byť vždy len veci porušujúce zákon, ako sú prepady vlakov, banky či dostavníka, krádež koní, pašovanie, násilné vymáhanie dlhov a iné výtržnosti zaváňajúce krvou a nebezpečenstvom. Čakajú vás aj bežné činnosti, ako je rybačka, cesta za zásobami do mesta, popíjanie v salóne, zaháňanie oviec a v neposlednom rade aj minihry, ako je domino, Black Jack, ale aj rýchle zabodávanie noža medzi prsty roztiahnutej ruky.
',
                'shop' => 'https://www.progamingshop.sk/red-dead-redemption-2-p-361084.html',
                'trailer' => 'https://www.youtube.com/watch?v=3eDw6PqKYHs',
                'big_img' => 'red_dead_v.jpg',
                'score' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $reviews[] = $review;
        }




        DB::table('reviews')->delete();
        DB::table('reviews')->insert($reviews);
    }
}
