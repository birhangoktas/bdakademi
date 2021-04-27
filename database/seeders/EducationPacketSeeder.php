<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationPacketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('educationpackets')->insert(

            [
                // ======  LGS  ====== 
                [
                    'packet_id' => 1,
                    'order' => rand(),

                    'menu_slug' => 'lgs',
                    'url' => 'lgs.png',

                    'packet_name' => 'LGS Tüm Dersler',
                    'packet_price' => 750
                ],

                [
                    'packet_id' => 2,
                    'order' => rand(),

                    'menu_slug' => 'lgs',
                    'url' => 'onlinelys.png',

                    'packet_name' => 'Online İngilizce',
                    'packet_price' => 299
                ],

                // ======  9.Sınıf  ====== 

                [
                    'packet_id' => 3,
                    'order' => rand(),

                    'menu_slug' => '9-sinif',
                    'url' => '9-10.png',

                    'packet_name' => '9 ve 10.Sınıf Tüm Dersler',
                    'packet_price' => 750
                ],

                [
                    'packet_id' => 4,
                    'order' => rand(),

                    'menu_slug' => '9-sinif',
                    'url' => '9-Sinif.png',

                    'packet_name' => 'Akıllı Kişiye Özel Çalışma Programı',
                    'packet_price' => 1299
                ],

                [
                    'packet_id' => 5,
                    'order' => rand(),

                    'menu_slug' => '9-sinif',
                    'url' => 'online9.png',

                    'packet_name' => '1200 Kelime Temel Gramer',
                    'packet_price' => 299
                ],

                // ==== 10.Sınıf ====

                [
                    'packet_id' => 6,
                    'order' => rand(),

                    'menu_slug' => '10-sinif',
                    'url' => 'paket8.png',

                    'packet_name' => '9 ve 10.Sınıf Tüm Dersler',
                    'packet_price' => 750
                ],

                [
                    'packet_id' => 7,
                    'order' => rand(),

                    'menu_slug' => '10-sinif',
                    'url' => 'paket7.png',

                    'packet_name' => 'Akıllı Kişiye Özel Çalışma Programı',
                    'packet_price' => 1299
                ],

                [
                    'packet_id' => 8,
                    'order' => rand(),

                    'menu_slug' => '10-sinif',
                    'url' => 'online10.png',

                    'packet_name' => '1200 Kelime Temel Gramer',
                    'packet_price' => 299
                ],

                // ==== 11.Sınıf ====


                [
                    'packet_id' => 9,
                    'order' => rand(),

                    'menu_slug' => '11-sinif',
                    'url' => '11-Sayisal.png',

                    'packet_name' => '11. Sınıf Sayısal Dijital İçerik Paketi',
                    'packet_price' => 1299
                ],

                [
                    'packet_id' => 10,
                    'order' => rand(),

                    'menu_slug' => '11-sinif',
                    'url' => '11-Esit.png',

                    'packet_name' => '11. Sınıf Eşit Ağırlık Dijital İçerik Paketi',
                    'packet_price' => 1299
                ],


                [
                    'packet_id' => 11,
                    'order' => rand(),

                    'menu_slug' => '11-sinif',
                    'url' => '11-Sozel.png',

                    'packet_name' => '11. Sınıf Sözel Dijital İçerik Paketi',
                    'packet_price' => 1299
                ],

                // ==== 12.Sınıf YKS ====

                [
                    'packet_id' => 12,
                    'order' => rand(),

                    'menu_slug' => 'yks',
                    'url' => 'tyt.png',

                    'packet_name' => 'YKS Tüm Dersler',
                    'packet_price' => 1299
                ],


                [
                    'packet_id' => 13,
                    'order' => rand(),

                    'menu_slug' => 'yks',
                    'url' => 'tyt.png',

                    'packet_name' => 'YKS Tüm Dersler + Ayt Eşit Ağırlık',
                    'packet_price' => 1299
                ],

                [
                    'packet_id' => 14,
                    'order' => rand(),

                    'menu_slug' => 'yks',
                    'url' => 'tyt-ayt-esit.png',

                    'packet_name' => 'TYT Tüm Dersler + Ayt Eşit Ağırlık',
                    'packet_price' => 1299
                ],

                [
                    'packet_id' => 15,
                    'order' => rand(),

                    'menu_slug' => 'yks',
                    'url' => 'tyt-ayt-sayisal.png',

                    'packet_name' => 'TYT Tüm Dersler + Ayt Sayısal Ağırlık',
                    'packet_price' => 1299
                ],


                [
                    'packet_id' => 16,
                    'order' => rand(),

                    'menu_slug' => 'yks',
                    'url' => 'tyt-ayt-sozel.png',

                    'packet_name' => 'TYT Tüm Dersler + AYT Sözel',
                    'packet_price' => 1299
                ],

                [
                    'packet_id' => 17,
                    'order' => rand(),

                    'menu_slug' => 'yks',
                    'url' => 'tyt-ayt-sozel.png',

                    'packet_name' => 'TYT Tüm Dersler + AYT Sözel',
                    'packet_price' => 1299
                ],


                [
                    'packet_id' => 18,
                    'order' => rand(),

                    'menu_slug' => 'yks',
                    'url' => 'tyt-ayt-tum.png',

                    'packet_name' => 'TYT Tüm Dersler + AYT Tüm Dersler',
                    'packet_price' => 1299
                ],



                [
                    'packet_id' => 19,
                    'order' => rand(),

                    'menu_slug' => 'yks',
                    'url' => 'tyt-ayt-tum.png',

                    'packet_name' => 'TYT Tüm Dersler + AYT Tüm Dersler',
                    'packet_price' => 1299
                ],



                [
                    'packet_id' => 20,
                    'order' => rand(),

                    'menu_slug' => 'yks',
                    'url' => '12Sayisal.png',

                    'packet_name' => '12.Sınıf Sayısal Kişiye Özel Çalışma Programı',
                    'packet_price' => 1299
                ],


                [
                    'packet_id' => 21,
                    'order' => rand(),

                    'menu_slug' => 'yks',
                    'url' => '12-Esit.png',

                    'packet_name' => '12.Sınıf Eşit Ağırlık Kişiye Özel Çalışma Programı',
                    'packet_price' => 1299
                ],


                [
                    'packet_id' => 22,
                    'order' => rand(),

                    'menu_slug' => 'yks',
                    'url' => 'onlineing.png',

                    'packet_name' => '1200 Kelima + Temel Gramer',
                    'packet_price' => 1299
                ]
            ]


        );
    }
}
