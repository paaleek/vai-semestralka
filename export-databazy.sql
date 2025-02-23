-- --------------------------------------------------------
-- Hostiteľ:                     127.0.0.1
-- Verze serveru:                10.4.25-MariaDB - mariadb.org binary distribution
-- OS serveru:                   Win64
-- HeidiSQL Verzia:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Exportování struktury databáze pro
CREATE DATABASE IF NOT EXISTS `vai_semestralka` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `vai_semestralka`;

-- Exportování struktury pro tabulka vai_semestralka.carousel
CREATE TABLE IF NOT EXISTS `carousel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `img_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trailer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku vai_semestralka.carousel: ~3 rows (přibližně)
/*!40000 ALTER TABLE `carousel` DISABLE KEYS */;
REPLACE INTO `carousel` (`id`, `img_name`, `header`, `content`, `shop`, `trailer`, `created_at`, `updated_at`) VALUES
	(1, 'days_gone2.jpg', 'Days Goneee', 'Obuj si zašpinené topánky bývalého motorkárskeho vyhnanca Deacona St. Johna a dnešného lovca odmien a skús v krajine obklopenej smrťou nájsť dôvod k životu.', 'https://www.progamingshop.sk/days-gone-cz-p-362642.html?gclid=CjwKCAiAj-_xBRBjEiwAmRbqYgU2ZM9xOtyLYKlcJgkRtPzqNHkAj20OIYUqawYW67NcNf0yhq9HBhoCQTwQAvD_BwE', 'https://www.youtube.com/watch?v=FKtaOY9lMvM', '2023-01-05 11:09:20', '2023-01-16 13:06:47'),
	(2, 'god_of_war2.jpg', 'God Of War PS4', 'V tomto tvrdom a neľútostnom svete bude musieť bojovať o prežitie, ale tiež sa bude snažiť zabrániť, aby opakoval krvou poškvrnené omyly, ktorých sa Duch Sparty dopustil.', 'https://www.progamingshop.sk/god-of-war-cz-p-354041.html', 'https://www.youtube.com/watch?v=K0u_kAWLJOA', '2023-01-05 11:09:20', '2023-01-16 13:07:01'),
	(3, 'watch_dogs.jpg', 'Watch Dogs 2', 'Watch Dogs je akčná adventúra, v ktorej sa vžijete do úlohy Aidena Pearca, ktorý sa snaží pomstiť vraždu svojej netere.', 'https://www.progamingshop.sk/watchdogs-2-cz-p-353960.html', 'https://www.youtube.com/watch?v=pc_U7tQwg8g', '2023-01-05 11:09:20', '2023-01-16 13:07:11');
/*!40000 ALTER TABLE `carousel` ENABLE KEYS */;

-- Exportování struktury pro tabulka vai_semestralka.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku vai_semestralka.failed_jobs: ~0 rows (přibližně)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Exportování struktury pro tabulka vai_semestralka.forums
CREATE TABLE IF NOT EXISTS `forums` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `forums_user_id_foreign` (`user_id`),
  CONSTRAINT `forums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku vai_semestralka.forums: ~4 rows (přibližně)
/*!40000 ALTER TABLE `forums` DISABLE KEYS */;
REPLACE INTO `forums` (`id`, `user_id`, `header`, `description`, `created_at`, `updated_at`) VALUES
	(8, 3, 'OPLATÍ SA 4K MONITOR?', 'Páni, poraďte mi.\r\nMám doma, dlhé roky FullHD, 27 palcový IPS monitor, 60 Hz.\r\nMám možnosť kúpiť nový monitor, s budgetom tak do 500€. Moja otázka vedie k tomu, či sa mi oplatí investovať do 4K keď môj komp to aj tak momentálne neutiahne (ale mám aj PS4 Pro, ktoré to utiahne).\r\nČo myslíte, je to už taká tá must-have fičúra pri kúpe nového monitora?\r\nMohol by mi niekto napísať, kto presedlal z FullHD na 4K či v tom vidí až takú devízu?\r\n\r\nALEBO je lepšie investovať do FullHD s vyššou obnovovacou frekvenciou a non-IPS panelom?', '2023-01-16 13:21:38', '2023-01-16 13:21:38'),
	(9, 3, 'PROSÍM POMOC, HĽADÁM JEDNU HRU', 'Ahojte.\r\nChcel by som sa na Vás obrátiť o pomoc. Kedysi dávnejšie som hral hru na štýl Dragon Age. Dalo sa pauzovať mali ste na výber spoločníkov atď.\r\nProblém je v tom, že si nepamätám názov. Prosím vedel by mi niekto poradiť? Viem, že postavy boli fixne dané a aj keď ste im dávali itemy nemenil sa ich vizuál.\r\nČo si spomínam tak bola tam napríklad čarodejnica a bola oblečená ako šaško. Teda mala na hlave takú čiapku a potom tam bol aj niečo ako ASSASIN a to bol škriatok s klobúkom.Ďalej niečo ako nemŕtvy čarodejník.Liečitel čo bol niečo ako psočlovek a ten hádzal taký kruh a vedel Vás aj vyliečiť.\r\nProsím ak si náhodou dakto spomeniete dajte mi info prosím.', '2023-01-16 13:22:19', '2023-01-16 13:22:19'),
	(10, 5, 'RYZEN 9 3950X VS 3900X', 'Ahojte, rozhodol som sa na upgrade procaku z ryzen 5 3600 na 9 3950x procak je v bedni slape vsetko tak ako ma, len co som pozeral porovnania s 3900x velmi velky rozdiel tam v hrach nieje (ano primarne vyuzitie mam hry a stream) Rozmyslam, nakolko este mam 8dni na vratenie tovaru ci ho vratit a vymenit za 3900 12jadro alebo si ho nechat. Predsa je to 300e rozdiel. Ktory je viac vhodny na hranie teraz a myslite ze 16jadier bude futureproof oproti 12?\r\na este otazka, v pc mam 600wattovy zdroj a bral som k procesoru aj 1200watt lebo bol na alze vo vyhodnej cene ale nedaval som ho zatial do pc. mam tam podla Vas radsej supnut tu 1100?\r\nDik za odpovede\r\n\r\n\r\n\r\nMBO x570 gaming edge wifi\r\n32gb 3600mhz\r\nRTX 2070s\r\nPSU 600+80 watt', '2023-01-16 13:26:01', '2023-01-16 13:26:01'),
	(11, 6, 'jak sa mate?', 'dneska\r\nalebo len tak všeobecne???', '2023-01-16 13:28:18', '2023-01-16 13:28:18');
/*!40000 ALTER TABLE `forums` ENABLE KEYS */;

-- Exportování struktury pro tabulka vai_semestralka.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku vai_semestralka.migrations: ~10 rows (přibližně)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2022_10_11_165236_cratere_reviews_table', 1),
	(7, '2022_12_28_165614_crate_news_table', 1),
	(8, '2022_12_29_175008_create_forums_table', 1),
	(9, '2022_12_29_175027_create_reply_table', 1),
	(10, '2023_01_05_102335_create_carousel_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Exportování struktury pro tabulka vai_semestralka.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku vai_semestralka.news: ~6 rows (přibližně)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
REPLACE INTO `news` (`id`, `img`, `header`, `main_content`, `main_img`, `created_at`, `updated_at`) VALUES
	(11, '2023-01-16-13_08_39_baldur.jpg', 'Baldur’s Gate 3', 'Oficiálne predstavenie Baldur’s Gate 3 sa blíži (dnes príde gameplay ukážka) a práve boli leaknuté prvé ingame zábery. Ukazujú nám štýl aký môžeme od hry čakať. Aj keď, keďže to robi Larian štúdio, ktoré robilo aj Divinity o kvalite tu nebolo pochýb.  Pritom zatiaľ, čo boje sú z nadhľadu nechýbajú kvalitne spracované postavy a detailné zábery pri rozhovoroch. \r\n\r\nHra príde do early access tento rok.', '2023-01-16-13_08_39_baldur-v.jpg', '2023-01-16 13:08:39', '2023-01-16 13:08:39'),
	(12, '2023-01-16-13_09_10_PS5.jpg', 'PS5 konzola', 'Keď je Sony ticho, niečo ohľadom PS5 sa snažil naznačil predajca Gamestop v predregistrácii na kúpu konzoly. Aj keď veľa nového dokopy nepovedal. Skôr zhrnul to, čo už vieme:\r\n\r\n"Zatiaľ čo svet netrpezlivo očakáva pohľad na hardvér konzoly PlayStation 5, Sony odhalila, čo je pod kapotou a nie je tam nedostatok konských síl:\r\n\r\nPodpora 8K TV\r\n8-jadrový AMD procesor\r\n3D zvuk\r\ncustom SSD disk\r\nspätná kompatibilita s PS4  a PSVR hardvérom\r\nRaytracing možnosti"\r\nStále nevieme, kedy Sony svoju konzolu ohlási, ale v zásade bude podobná ako Xbox Series X, len výkon grafiky bude odlišný. Najviac sa hovorí o 9.2Tflops, ale padli už aj čísla od 12 po 14 Tflops v rôznych zaručene presných leakoch. Ostáva čakať, čo Sony nakoniec potvrdí.', '2023-01-16-13_09_10_PS5-v.jpg', '2023-01-16 13:09:10', '2023-01-16 13:09:10'),
	(13, '2023-01-16-13_10_23_amd-gpu.jpg', 'AMD GPU', 'Vyzerá to tak, že AMD vstáva z mŕtvych a dokazujú nám to posledné čísla. Aj čo sa týka ziskovosti firmy a tržieb, tak aj dodávok čipov pre zákazníkov. V oblasti procesorov to má ľahšie, keďže Intel úplne zastal a nevie rozbehnúť novú architektúru, ale v oblasti GPU to nie je také jednoduché. Nvidia je ťažká konkurencia a AMD skôr doťahuje.\r\n\r\nNajnovšia správa od Jon Peddie Research však ukázala, že napriek tomu mali v grafikách dobrý posledný štvrťrok minulého rok. Správa hovorí, že AMD v Q4 2019 zaznamenalo zvýšenie celkových dodávok GPU na trh o 22,6%. To znamená, že AMD má teraz na trhu GPU 19% podiel, čo je 3% nárast oproti Q3, zatiaľ čo Nvidia klesla na 18% podiel. Je to však trh všetkých grafík, ako integrovaných, tak samostatných, a teda zarátali sa tam aj AMD procesory s integrovanou grafikou. Náležite tomu však celý tento trh vedie Intel so 63% podielom, ktorý má grafiku v takmer každom procesore.\r\n\r\nAk by sa rátali len samostatné grafiky, za posledný štvrťrok stále výrazne vedie Nvidia so 73% podielom na trhu, zatiaľ čo AMD dosiahlo 27%. \r\n\r\nUvidíme, ako sa bude situácia vyvíjať tento rok, totiž k Nvidi a AMD sa pridá Intel so svojimi samostatnými grafikami a všetky tri firmy ukážu svoje nové technológie. Nvidia prinesie Ampere, AMD prinesie RDNA2 a Intel svoje Xe grafiky. Pre zaujímavosť, všetky budú mať raytracing.', '2023-01-16-13_10_23_amd-gpu-v.jpg', '2023-01-16 13:10:23', '2023-01-16 13:10:23'),
	(14, '2023-01-16-13_10_48_news_death_stranding.jpg', 'Death Stranding', 'Death Stranding príde na PC začiatkom júna 505 Games už ohlásilo dátum vydania svojej Kojimovej simulácie poštára na PC.\r\n\r\n505 Games už ohlásilo dátum vydania svojej Kojimovej simulácie poštára na PC. Death Stranding tak vyjde 2. júna na Steame a Epic store. Na PC ponúkne foto režim, vysoké rozlíšenia, vysoký framerate, podporu ultra wide monitorov a pridá aj obsah z Half Life univerza.\r\n\r\nPlus pre predobjednávateľov pripravilo 505 Games bonusy a to:\r\n\r\nDeath Stranding HD wallpapery\r\nChiral zlato a omnireflector slnečné okuliare\r\nChiral zlato a omnireflector čiapka\r\nZlatý a strieborný speed skeleton\r\nZlaté a strieborné brnenie', '2023-01-16-13_10_48_news_main_death_stranding.jpg', '2023-01-16 13:10:48', '2023-01-16 13:10:48'),
	(15, '2023-01-16-13_11_22_stadia.jpg', 'Google Stadia', 'Google šetrí na Stadii, neponúka vývojárom dosť peňazí na porty. \r\n\r\nNevieme prečo, ale zdá sa, že Google šetrí pri investovaní do expandovania Stadie. Jeden z vydavateľov povedal, že "financie, ktoré firma dáva za port, sú tak nízke, že neboli ani obsahom rozhovorov". Zároveň s tým má Stadia veľmi málo používateľov a port by sa im nemusel oplatiť. Totiž Stadia funguje na Linuxe, zatiaľ čo väčšina veľkých hier je čisto pre Windows. Nehovoriac o tom, že by sa museli starať o ďalšiu platformu a jej podporu.\r\n\r\nJeden z vývojárov k tomu povedal:\r\n\r\n„Nejde len o finančnú vec. Nakoniec sa pýtam otázku: „Prečo by som to mal urobiť?  A nebol žiaden pozitívny dôvod, aby sme sa tam presunuli. V skutočnosti nebolo nič, čo by nás motivovalo, okrem toho, že by sme boli prví na tejto platforme. “\r\n\r\nNakoniec na službe je zatiaľ len niekoľko desiatok titulov, čo veľa naznačuje.\r\n\r\nZdroj: www.businessinsider.com', '2023-01-16-13_11_22_stadia-v.jpg', '2023-01-16 13:11:22', '2023-01-16 13:11:22'),
	(16, '2023-01-16-13_12_15_GOG.jpg', 'GOG', 'mení politiku refundov, hru môžete vrátiť až do 30-tich dní po zakúpení. Každá spoločnosť má svoje vlastné pravidlá a obmedzenia týkajúce sa vrátenia peňazí - niektoré sú benevolentné, niektoré naopak veľmi prísne. GOG práve aktualizoval svoju politiku vracania peňazí a je to pravdepodobnejšie najpriaznivejšia politika refundov na trhu. Hru môžete totiž vrátiť až do 30-tich dní od zakúpenia, bez ohľadu na to, že ste hru už stiahli, nainštalovali a hrali. Samozrejme, GOG si vyhradzuje právo na odmietnutie refundu a chce posudzovať každú žiadosť o vrátenie peňazí individuálne, aby nedochádzalo k zneužívaniu tejto novej politiky.', '2023-01-16-13_12_15_GOG.-v.jpg', '2023-01-16 13:12:15', '2023-01-16 13:12:15');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Exportování struktury pro tabulka vai_semestralka.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku vai_semestralka.password_resets: ~1 rows (přibližně)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
REPLACE INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('palo.galcik@gmail.com', '$2y$10$EnWj6emCCuc6PCO/v6QTxOBhikEXfPTctDE8M29J7ZnJb1nbtQuzS', '2025-02-23 17:03:40');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Exportování struktury pro tabulka vai_semestralka.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku vai_semestralka.personal_access_tokens: ~0 rows (přibližně)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Exportování struktury pro tabulka vai_semestralka.reply
CREATE TABLE IF NOT EXISTS `reply` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reply_forum_id_foreign` (`forum_id`),
  KEY `reply_user_id_foreign` (`user_id`),
  CONSTRAINT `reply_forum_id_foreign` FOREIGN KEY (`forum_id`) REFERENCES `forums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reply_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku vai_semestralka.reply: ~6 rows (přibližně)
/*!40000 ALTER TABLE `reply` DISABLE KEYS */;
REPLACE INTO `reply` (`id`, `forum_id`, `user_id`, `answer`, `created_at`, `updated_at`) VALUES
	(11, 8, 4, '4K sa oplati ak chces pekny obraz bez viditelnych pixelov a hlavne ak ti staci 60hz, ak by si chcel viac ako 60hz pri 4K tam su zatial drahé monitory.\r\n\r\ncenovo a vykonovo je idealny standard teraz 1440p aj so 144Hz', '2023-01-16 13:24:28', '2023-01-16 13:24:28'),
	(12, 9, 4, 'Divinity original sin ?\r\n\r\nzalezi aj kolko rokov dozadu', '2023-01-16 13:25:01', '2023-01-16 13:25:01'),
	(13, 10, 6, 'de o to ako dokážeš využiť všetky jadrá procesora. Ja mám takisto 3950X a ešte som ho svojou kombináciou hrania a produktivity nedokázal vyťažiť naplno. Veľký rozdiel je vo výrobe a fakte, že 3950X papá menej Wattov než 3900.\r\nV PC mám 850W zdroj a čakám na Big Navi RDNA2.0.\r\nJa by som byť tebou si nechal 3950X. Je to parádny procesor a si na dlhú dobu vystaraný.', '2023-01-16 13:27:06', '2023-01-16 13:27:06'),
	(14, 10, 6, 'Procák sa rozhodni sám, ešte roky to pri hrách bude fuk, aj tak ide hlavne o takt a do 8 jadier, ani neviem či dáka hra využije viac. A zdroj tam kľudne daj, aj tak si zoberie len toľko koľko potrebuje, no osobne, teda ak si ho bral k CPU a môžeš ho vrátiť, tak osobne by som radšej zobral dáky Seasonic plus platinum, napr. 850Watt, tam máš stále rezervu, až, až a sú perfektné, sám mám 750ku a až som sa zľakol, že nejde vetrák, ako je tichučký a dnes sú bezkonkurenčné.', '2023-01-16 13:27:21', '2023-01-16 13:27:21'),
	(15, 8, 6, 'Ak pracuješ napr. s fotkami tak to využiješ no ak sa chceš na tom hrať a tvoj PC to zjavne nepotiahne tak je to hlúposť ísť do 4K Monitora. Za ďalšie podla mňa je v dnešnej dobe hlavne hlúposť ísť do 60Hz monitora kedže trend je čo najviac a rozdiel medzi 60Hz a 100Hz monitorom je neskutočne veľký v hrách. Viac hercov už nieje taký badatelný rozdiel ale medzi 60 a 100/120Hz je pre mňa veľmi veľký rozdiel.... určite by som zvolil zlatú strednú cestu niečo v QHD 3440x1440 a nech to má aspoň 100Hz a viac.... Nech nemusíš meniť monitor zas o rok či dva.... Ale do 60Hz nechoj aj keby bol akýkoľvek lacný.... je tam badatelný rozdiel aj pri práci vo Win dokonca....', '2023-01-16 13:27:52', '2023-01-16 13:27:52'),
	(16, 9, 1, 'minecraft xD', '2023-01-16 13:29:58', '2023-01-16 13:29:58');
/*!40000 ALTER TABLE `reply` ENABLE KEYS */;

-- Exportování struktury pro tabulka vai_semestralka.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku vai_semestralka.reviews: ~7 rows (přibližně)
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
REPLACE INTO `reviews` (`id`, `header`, `small_img`, `main_content`, `shop`, `trailer`, `big_img`, `score`, `created_at`, `updated_at`) VALUES
	(11, 'Kingdome come: Deliverence', '2023-01-16-13_14_11_kingdome-m.jpg', 'Očakávanejšiu hru by ste v našich končinách v posledných mesiacoch hľadali ťažko. A možno aj kontroverznejšiu, vzbudzujúcu množstvo protichodných názorov. Kingdom Come: Deliverance od českého tímu Warhorse Studios sa pokúsilo priniesť odlišný pohľad na stredovekú RPG v otvorenom svete, ako ponúkajú konkurenčné tituly. Napriek mnohých chybám a prešľapom, ktorým sa nevyhne takmer žiadna ambiciózna hra, musíme prehlásiť, že vytknúť jej môžeme mnohé, ale bavili sme sa ako už dávno nie. Kingdom Come: Deliverance je napriek tomu, že stavia mnohé (nielen) mainstreamové postupy na hlavu, zaujímavým a chytľavým príbehom, ktorý vás pohltí, aj keď budete zakopávať o mnoho nedomyslených a nedokončených herných prvkov. Pretože niektoré príbehy si robíte vy sami.\r\n\r\nÁno, bavilo nás to, dnes nebudeme frflať. Bavilo nás to nesmierne, čas okolo akoby prestal existovať, hodiny bežali jedna za druhou, svitaniu v hre sekundovalo to skutočné za oknom. Dokonca sme chrochtali blahom až tak, že nás túlanie sa po nádhernej českej krajine odvádzalo od zaujímavej príbehovej línie či postranných questov. Dokážeme hre odpustiť už len pre tento subjektívny pocit možno až príliš mnoho, čo by nás pri iných hrách škrelo. Podarí sa totiž máloktorému projektu. Obrovským plusom je i fakt, že sa vývojári na čele s Danom Vávrom rozhodli odložiť do kúta otrepané koncepty. Áno, je to fantasy, avšak žiadni orkovia, draky či iná vymyslená háveď tu na vás nezaútočí. Ak vám už niekto skočí do úsmevu, bude to jedine človek stojaci na opačnej strane barikády ako je tá vaša. Stredovek v podaní Kingdom Come je drsný, ale v rámci možností historicky presný. Na posledné dve slová dajte dôsledný dôraz.\r\n\r\nPokračujeme ďalej: zápletka, hoci sa jej nevyhli rôzne žánrové klišé, má v sebe ukrytú poriadnu dávku príťažlivosti a úlohy dokážu zaujať. A aby sme si to zhrnuli, prečo sa budeme prikláňať v rebríčkoch najlepších hier tohto roku aj na stranu tohto českého klenotu, tak i pre spracovanie - nie to technické, ale dizajnérske. Dajme na bok chyby, hardvérovú nevyladenosť, ukrutne dlhé nahrávacie doby a celkovo občas plochý až umelý dabing. Hra sa nám páčila, hoci detaily textúr majú ďaleko k dnešnému štandardu. Lenže ono to vyzerá prirodzene, žiadne prepálené farby, preexponované detaily - skrátka svet taký, aký skutočne je. Pozrite sa z okna a ak ste to včera neprehnali s nelegálnymi látkami, farebná paleta je nápadne podobná tej v hre. So skvelou architektúrou budov, level dizajnom prostredí a logickým radením objektov a predmetov. To, že sú obydlia skromné, je historicky overiteľným faktom, prostredie pôsobí drsne, ale prirodzene. Toto skrátka nie je Skyrim.', 'https://www.progamingshop.sk/kingdom-come-deliverance-cz-p-396970.html', 'https://www.youtube.com/watch?v=iCSuo7cxAGs', '2023-01-16-13_14_11_kingdome-v.jpg', 7.90, '2023-01-16 13:14:11', '2023-01-16 13:14:11'),
	(12, 'Wolfenstein: The New Order', '2023-01-16-13_15_19_wolfenstein-new-m.jpg', 'Ak ste už v roku 1992 hrávali hry, určite vás neobišiel titul, ktorým Id Software rozbehli celý FPS žáner a to Wolfenstein 3D. Ako prví vtedy tvorcovia ponúkli textúrované 3D prostredie, ktoré doplnili zaujímavými lokalitami, silnými zbraňami, tajnými chodbami a nakoniec aj masívnymi nepriateľmi. Síce to vtedy boli ešte prostredia jednoduché a postavy len 2D animácie, ale malo to štýl, ktorý doteraz nemá veľa hier. Jedinečnú prvú hru nasledovalo niekoľko rozšírení a pokračovanie Spear of Destiny. O desať rokov neskôr prišiel aj kvalitný Return to Castle Wolfenstein s jedinečným multiplayerom a neskôr ešte nevýrazná snaha o reštart v titule Wolfenstein.\r\n\r\nTeraz, o 22 rokov neskôr, prichádza Wolfenstein: The New Order, skutočné pokračovanie jednotky, ktoré otvára novú epochu hry a aj celkom nový svet na preskúmanie. Hra sa totiž tentoraz posunie až do roku 1960, presnejšie do alternatívneho roku 1960, v ktorom nacisti po vyhranej vojne ovládajú svet. Hlavný hrdina B.J. Blazkowicz bol mimo hry a nemal im v tom kto zabrániť. Teraz sa však vracia a nový svet sa má na čo tešiť - a rovnako aj vy. Autori totiž vytvorili pôsobivý atmosferický svet, ktorý vám ukáže, ako sme mohli skončiť. A nie len to. Vývojári spojili to najlepšie, čo ponúklo 22 rokov vývoja FPS akcii a priniesli v 12-hodinovej singleplayer kampani, oldscholovú hrateľnosť spojenú s modernými prvkami.\r\n\r\nHra tak ponúkne adrenalínovú akciu, klasické zbieranie lekárničiek, nábojov, alebo aj odkrývanie mapy. Celé je to doplnené o perky, upgrady zbraní alebo možnosť úpravy príbehu rozhodnutiami. Základom sú netradičné lokácie, silné zbrane a ešte silnejší nepriatelia a autori nezabudli ani na príbeh a postavy. Hra má v sebe jednoducho všetko, čo singleplayerová FPS potrebuje a všetko spracované na vysokej úrovni.', 'https://www.progamingshop.sk/wolfenstein-the-new-order-p-223988.html', 'https://www.youtube.com/watch?v=RxZdTsTbloA', '2023-01-16-13_15_19_wolfenstein-new-v.jpg', 9.00, '2023-01-16 13:15:19', '2023-01-16 13:15:19'),
	(13, 'Wolfenstein II: The New Colossus', '2023-01-16-13_15_54_wolfenstein-m.jpg', 'Bethesda pred pár rokmi reštartovala Wolfenstein sériu vo veľkom štýle a po menšej samostatnej expanzii prináša aj plnohodnotné pokračovanie nazvané Wolfenstein II: The New Colossus. William Joseph Blazkowicz alebo Terror Billy ako mu nacisti hovoria, sa tentoraz vydá oslobodiť Ameriku.\r\n\r\nAk ste nehrali predošlé časti a neviete nič o legendárnej Wolfenstein sérii, ktorá prakticky rozbehla celý 3D fps žáner, zameškali ste veľa. Ale v skratke, je to séria umiestnená do druhej svetovej vojny, kde sa s hrdinom Blazkowiczom pokúšame zastaviť nacistickú hrozbu. Celá séria sa nesnaží hrať na realitu, ale ponúka prímes sci-fi vďaka nacistickým pokusom s duchmi, ale aj novými technológiami, kde nechýbali mechanické monštrá. To však bol základ v pôvodných hrách, v novom reštarte sa situácia zmenila a z druhej svetovej vojny sme sa presunuli do sveta po nej. Blazkowicz bol totiž zranený, Hitlera nemal kto zastaviť a ovládol celý svet.  V prvej časti sme spoznávali úplne zmenenú Európu, ktorá je koncom 50-tych rokov v rukách nacistov a dostali sme sa aj na Mesiac. Urobili sme vtedy, čo sme mohli, ale svet sa nedá len tak zmeniť, a preto teraz skúsime nový smer, nový kontinent.\r\n\r\nAmerika je v roku 1961 okupovaná nacistami, veľa miest je zničených atómovými bombami ale odboj tu stále žije a my mu ideme pomôcť. Ak sa dá odniekiaľ začať oslobodzovať svet, je to práve tu. Je potrebné zmobilizovať odboj, pomôcť mu vzchopiť sa a začať bojovať. Ale nebude to také jednoduché. Ani priamočiare, ani heroické. Nový príbeh bude úplne iný. Jasné, je tam akcia, ale tie udalosti okolo toho.... musím povedať, že scenáristi zrejme fičali na niečom poriadne silnom.', 'https://www.progamingshop.sk/wolfenstein-2-the-new-colossus-p-373270.html', 'https://www.youtube.com/watch?v=85_5UEhFIFs', '2023-01-16-13_15_54_wolfenstein-v.jpg', 9.00, '2023-01-16 13:15:54', '2023-01-16 13:15:54'),
	(14, 'Witcher 3: Wild Hunt', '2023-01-16-13_16_30_witcher-m.jpg', 'Vytúžený tretí Zaklínač je tu. Viac vlastne ani netreba hovoriť. Desiatka pri hodnotení je neprehliadnuteľná a svieti ako jazva na tvári bielovlasého lovca monštier - či už majú podobu ohyzdných tvorov alebo skazených ľudí. Ale ak chcete vedieť, čím si vlastne Geralt u nás vyslúžil najvyššie hodnotenie a prečo by nemal chýbať vo vašej zbierke, čítajte ďalej.\r\n\r\nMáloktorá hra podľa literárnej predlohy či filmu dopadla dobre. Príkladom je Hra o Tróny - fantastické dielo George. R.R. Martina, ktoré sa  síce dobre vyníma v TV seriáli, ale doposiaľ sa ho nepodarilo v uspokojivej forme preniesť do žánru videohier (mimochodom, určité spoločné znaky s Game of Thrones nájdete práve v treťom Witcherovi). Zaklínač sa tímu CD Projekt Red vydaril hneď na  začiatku. Prvý diel RPG trilógie vytvorenej podľa kníh Andrzeja Sapkowskeho bol výborný, druhý posunul latku kvality ešte vyššie a Witcher III je už naozaj takmer dokonalý. Hovoríme takmer, pretože nejaké chybičky sa tam nájdu. Tie sú však prevalcované masívnym a vysokokvalitným obsahom, aký nemá v RPG žánri obdobu.\r\n\r\nNosný príbeh sa dá charakterizovať jedinou vetou: Zaklínač hľadá svoju zverenkyňu Ciri, ktorú vychoval ako dieťa, a teraz ju prenasleduje Divoký hon. Hoci dievča kráča v šľapajách svojho učiteľa, o čom sa presvedčíte aj v pasážach, kde si priamo zahráte za Cirillu, Geraltova pomoc je nevyhnutná a v hre je nielen osud divožienky, ale aj celého sveta. Akoby to nestačilo, krajina sužovaná vojnou je plná politických intríg, zbojníkov, zbehov, náboženských fanatikov, rasistov a, samozrejme, monštier, a tak má zaklínač o zábavu (o prácu) postarané.  Všetko sa začína krátkou idylkou v sídle zaklínačov Kaer Morhen, kde poteší prítomnosť hneď dvoch Geraltových osudových žien - hoci každá v jeho živote zohráva inú úlohu. Okrem ešte mladučkej Ciri je to krásna čarodejnica Yennefer, ktorá sa zásadne oblieka len do čiernej a bielej a dostane priestor hlavne v neskoršej fáze príbehu. Hravý úvod v pevnosti spojený s nenáročnou výukou náhle preruší tvrdá realita. Geralt spolu s ďalším zaklínačom Vesemirom sa ocitnú v spustošenej krajine a viacmenej spoločne prelúskajú prvé úlohy. Potom sa už naplno venujete Geraltovi, s ktorým máte absolútnu voľnosť pohybu po obrovskej krajine, čo jednoducho potrebuje Zaklínača.', 'https://www.progamingshop.sk/the-witcher-3-wild-hunt-game-of-the-year-edition-p-359477.html', 'https://www.youtube.com/watch?v=yO-OMB6Ilf4', '2023-01-16-13_16_30_witcher-v.jpg', 10.00, '2023-01-16 13:16:30', '2023-01-16 13:16:30'),
	(15, 'Watch Dogs 2', '2023-01-16-13_17_08_watch_dogs_2_m.jpg', 'Dočkali sme sa. Je tu rok, v ktorom sa Ubisoft rozhodol nepustiť do obchodov ďalšie pokračovanie Assassin\'s Creed série a jesennú sezónu zastupuje len jedným titulom. Tým je práve pokračovanie hackerskej akcie Watch Dogs, ktorá sa dostala von po odklade ešte v prvej polovici roka 2014. Ubisoft však už pred vydaním hry tušil, že jeho plán s novou značkou nevyjde úplne podľa predstáv a internet sa začal prevracať hore nohami. Hra totiž na tom po technickej stránke nebola vôbec dobre, objavilo sa viacero chýb a navyše vizuálna stránka nebola na tom ani zďaleka tak, ako autori prezentovali pred vydaním. Postupné znižovanie kvality grafiky fanúšikov veľmi rozhnevalo a situáciu sa snažili riešiť po svojom - vlastnými úpravami. Po oznámení Watch Dogs 2 len krátko pred tohtoročnou E3 tak bolo každému jasné, že Ubisoft bude musieť tentokrát poriadne zabrať a podobným chybám sa oblúkom vyhnúť. Ak totiž chce so značkou pokračovať aj po druhej časti, nemá veľmi na výber.\r\n\r\nVo Watch Dogs 2 sa príbeh posúva z betónovej džungle Chicaga do rozmanitých slnečných oblastí San Francisca. Konkrétne ide o štyri lokality - Silicon Valley, Oakland, Marin a priamo San Francisco. Každá z týchto lokalít má svoje vlastné črty, odlišuje sa okolitým prostredím, samotnými stavbami a štýlom života jej obyvateľov. S novým prostredím musí, pochopiteľne, prísť aj nová hlavná postava, ktorou je Marcus. Ako Afroameričan to v Spojených štátoch nemal vždy jednoduché, no o tom hra tentokrát vôbec nebude. Marcus je totiž šikovný, inteligentný a hlavne dobrý hacker. Je členom rebelantskej jednotky, ktorá sa snaží zastaviť korporácie pred aplikovaním moderných technológií na získavanie všetkých údajov o obyvateľoch, ktoré majú byť zneužité na protiprávne účely.  \r\n\r\nRebeli si hovoria DeadSec a ich jadro pozostáva zo štyroch členov, ktorí predstavujú zaujímavý mix osobností. Okrem Marcusa je v hre šialený a impulzívny Wrench, inteligentná Sitara, ktorá sa snaží prinášať nové nápady, no a nakoniec bojazlivý Josh, ktorý zase zvládne a vyrieši každý problém pomocou klávesnice. Ubisoft vo Watch Dogs 2 celkom očividne nechcel nič riskovať, stavil na istotu a pustil sa tvrdo do vytvorenia hry, ktorá mala vyjsť v podobnom duchu pred dvomi rokmi.', 'https://www.progamingshop.sk/watchdogs-2-cz-p-353960.html', 'https://www.youtube.com/watch?v=rTdzf5ZDsz4', '2023-01-16-13_17_08_watch_dogs_2_v.jpg', 8.00, '2023-01-16 13:17:08', '2023-01-16 13:17:08'),
	(16, 'God Of War PS4', '2023-01-16-13_17_47_god-of-m.jpg', 'Starneme. Menia sa naše názory, životné postoje, priority, inak na nás vplýva okolie. Možno sa už nedáme tak stiahnuť davom okolo nás, máme tiež iné očakávania a čo by sme v minulosti zbožňovali až za hrob, to nás dnes už necháva chladnými. Ak ste dlhšie hráčmi, mohli ste si všimnúť tiež to, že spolu s nami dospievajú aj herné série, ktorých autori si uvedomujú, že už nie je dosť to, čo kedysi bohato stačilo. Kedysi sme boli šťastí, keď sme mohli bezhlavo preliať hektolitre krvi. Dnes to vnímame inak a chceme viac, čo musia hry reflektovať. Vždy je tu však niekoľko rôznych častí publika a je len na tvorcoch, komu sa rozhodnú zapáčiť.\r\n\r\nNový God of War je pokračovaním aj rebootom zároveň. Nadväzuje na príbeh známeho hromotĺka, ktorý sám vykynožil celý panteón, no zároveň funguje samostatne, otvára nové príbehy a to dôležité z minulosti stručne predstaví aj úplne novým hráčom, ktorí doteraz so sériou nemali tú česť. A ja som za to veľmi vďačný. Jednotku som si užil, dvojku som zbožňoval, aj odbočky na PSP boli kvalitné, aj keď veľmi jednoduché a krátke, no kým som sa dostal k trojke, mal som dojem, že hrám stále len to isté a musel som sa do nej nútiť. Mnohých možno sklamem, iných zas poteším. Aj keď nová hra nesie meno známej série, nie je to God of War, ktorý poznáte z minulosti.\r\n\r\nHra spolu s nami dospela, zároveň sa inšpiruje v bohatej konkurencii iných akčných hier, ktoré na trhu existujú 13 rokov po vzniku série. A aby ste to všetko pochopili, stačí sa pozrieť na základnú premisu. Príbehy o krvavej pomste a jednom súboji za druhým, ktoré by sme dnes mohli vnímať ako povrchné, sú preč. To je minulosť, možno poznačená nostalgiou v našich očiach, no v očiach hlavného hrdinu je to niečo, na čo chcel už dávno zabudnúť. Preto je tu. Preto je na mrazivom severe. Chce zabudnúť, vedie nový život a sám dospel do štádia, kedy život nie je o trhaní končatín, ale o zmierení samého so sebou, o rodine, o budúcnosti.\r\n\r\nTušíme, prečo sa tam dostal. Nevieme však, ako sa tam dostal. A ani sa to (zatiaľ) nedozvieme. Do hry však vstupujeme v neľahkej fáze života hlavného hrdinu, kedy musí čeliť niečomu novému. Musí totiž vychovávať syna, ku ktorému má skutočne chladný vzťah. Každý z nich je iný, no spoločne sa musia vydať na zložitú cestu a jedine spoločne na nej dokážu prežiť. V niečom môžete badať jasné kontúry s The Last of Us, avšak vo veľkej miere si hra ide vlastnou cestou. Tento vzťah a jeho budovanie je v jej jadre. A taktiež je to to, čo vás pri nej bude držať. Začiatok je v hre jasne daný a asi tušíte, že to neskončí zle, no púť plná súbojov a prekážok je vlastne akousi alegóriou búrlivého vzťahu otca so synom. Ibaže ju vy hráte a postavy ju prežívajú, no všetko, čo sa tu udeje, sa udeje kvôli posunu tohto vzťahu istým smerom.', 'https://www.progamingshop.sk/god-of-war-cz-p-354041.html', 'https://www.youtube.com/watch?v=CL0TTu53O-0', '2023-01-16-13_17_47_god-of-v.jpg', 9.00, '2023-01-16 13:17:47', '2023-01-16 13:17:47'),
	(17, 'Red Dead Redemtion 2', '2023-01-16-13_18_48_red_dead_m.jpg', 'Pre mnohých je to hra roka. Minimálne môžeme povedať, že veľmi úspešne pokračuje v tom, čo výborne rozohrala pôvodná westernová akcia na starej generácii konzol. A ešte pred Red Dead Redemption tu bol Red Dead Revolver, ktorý stál na úplnom začiatku. V novom titule v sérii si na svoje si prídu nielen priaznivci divokého západu, ale všetci tí, ktorí nepohrdnú vydarenými prestrelkami v otvorenom svete s opojnou vôňou dobrodružstva. Red Dead Redemption 2 skrátka páli ostrými a presne do čierneho.\r\n\r\nHlavným hrdinom je tentokrát sympatický drsňák Arthur Morgan. Nie je to žiadne neviniatko, rovnako ako ostatní členovia kočujúceho gangu, ktorý si hľadá svoje miesto v krajine, čo sa už začína meniť z nespútaného divokého západu na moderný a civilizovaný svet. Zatiaľ je to stále miesto plné dobrodruhov a štvancov, ale nie nadlho. A medzi nich patríte aj vy. Lenže je čas na zmenu, spolu s vašimi druhmi, ktorí putujú s konskými povozmi, cítite potrebu usadiť sa a žiť usporiadaným životom. Ibaže sa vám to akosi nedarí. Či už vďaka vlastným chybám, alebo prešľapom spoločníkov a pod vedením svojského Dutcha, nielen pri snahe získať peniaze, sa neustále dostávate do problémov. A neraz to končí krviprelievaním a následne hľadaním nového miesta, kde všetko skúsite odznova.\r\n\r\nProvizórny tábor, ktorý priebežne mení svoju polohu, je miestom, kam sa neustále vraciate. Podobne ako v iných hrách, dokážete toto osídlenie vylepšovať a zútulňovať. Môžete darovať predmety, proviant alebo financie, ktorými podporíte fungovanie kempu a okrem toho máte možnosť prikúpiť niekoľko úprav, ktoré osožia vám aj ostatným. Na jednej strane je tábor úžasné miesto, kde cítite spriaznenosť s ostatnými ľuďmi na pokraji spoločnosti, ktorí sa rozprávajú, posedávajú pri ohni, spievajú, nahovárajú vás na rôzne aktivity. A nemusia to byť vždy len veci porušujúce zákon, ako sú prepady vlakov, banky či dostavníka, krádež koní, pašovanie, násilné vymáhanie dlhov a iné výtržnosti zaváňajúce krvou a nebezpečenstvom. Čakajú vás aj bežné činnosti, ako je rybačka, cesta za zásobami do mesta, popíjanie v salóne, zaháňanie oviec a v neposlednom rade aj minihry, ako je domino, Black Jack, ale aj rýchle zabodávanie noža medzi prsty roztiahnutej ruky.', 'https://www.progamingshop.sk/red-dead-redemption-2-p-361084.html', 'https://www.youtube.com/watch?v=3eDw6PqKYHs', '2023-01-16-13_18_48_red_dead_v.jpg', 10.00, '2023-01-16 13:18:48', '2023-01-16 13:18:48');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

-- Exportování struktury pro tabulka vai_semestralka.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku vai_semestralka.users: ~7 rows (přibližně)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `is_admin`, `profile_picture`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'palo.galcik@gmail.com', '2022-12-31 13:17:14', '$2y$10$6tRY2JvtHG6ajWWfiSUapeVeqSF5bpHJY56YJnn9yPWV8Q3xAJV1K', NULL, NULL, NULL, 1, '2022-12-29-17_16_58_mirek.jpg', NULL, '2022-12-31 13:17:14', '2022-12-31 13:17:14'),
	(2, 'mirek', 'jako.galcik@gmail.com', '2022-12-31 13:17:14', '$2y$10$6tRY2JvtHG6ajWWfiSUapeVeqSF5bpHJY56YJnn9yPWV8Q3xAJV1K', NULL, NULL, NULL, 0, '2022-12-29-17_18_59_user3-267-940.jpg', NULL, '2022-12-31 13:17:14', '2022-12-31 13:17:14'),
	(3, 'mirek', 'mirek@gmail.com', NULL, '$2y$10$ifVEozcvVGCE5PH4YvdfHOokFoslsWmij2XP0695IaonSGJOmH2mq', NULL, NULL, NULL, 0, '2023-01-16-13_21_20_gears5.jpg', NULL, '2023-01-16 13:21:20', '2023-01-16 13:21:20'),
	(4, 'KANTOMASTER', 'kantomaster@gmail.com', NULL, '$2y$10$cuasVQ/yXCp6FWP4J9fEyerWnHJoOD9/mxwY6YRjYCz1xRSPOpG5a', NULL, NULL, NULL, 0, '2023-01-16-13_22_56_user380880-5731165.jpg', NULL, '2023-01-16 13:22:56', '2023-01-16 13:22:56'),
	(5, 'PETER', 'peter@gmail.com', NULL, '$2y$10$xFVbsoDFBsQjrDGVUCCd1OsE0db.f0866UBWz2/HYQHTdN0RGGX1q', NULL, NULL, NULL, 0, '2023-01-16-13_25_39_user371442-2128412.jpg', NULL, '2023-01-16 13:25:39', '2023-01-16 13:25:39'),
	(6, 'viktor', 'viktor@gmail.com', NULL, '$2y$10$fopDJu1JxljfpXulx9LOuOSNV.ju6oLdOjzTvT0dNllcsmv2sxRTi', NULL, NULL, NULL, 0, '2023-01-16-13_26_37_user3-267-940.jpg', NULL, '2023-01-16 13:26:37', '2023-01-16 13:26:37'),
	(7, 'admin2', 'arrtik.galcik@gmail.com', '2025-02-23 18:08:36', '$2y$10$gM48u05bYHPurR5tKkzRR.m1zGjxBQSW91Vb4BPiT8.uUSySgRNGu', NULL, NULL, NULL, 1, NULL, NULL, '2025-02-23 17:07:30', '2025-02-23 17:07:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
