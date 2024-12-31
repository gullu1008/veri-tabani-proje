<?php

namespace App\Controllers;

use MongoDB;// composerla yüklendi
//genel dokümantasyon --> https://www.mongodb.com/docs/php-library/current/get-started/
//veri okuma için dokümantasyon --> https://www.mongodb.com/docs/php-library/current/read/
//veri yazma için dokümantasyon --> https://www.mongodb.com/docs/php-library/current/write/

//mongo kurulum için dokümantasyon --> https://www.mongodb.com/developer/languages/php/php-setup/
//ek bilgi için dokümantasyon --> https://www.mongodb.com/developer/languages/php/php-crud/

class Home extends BaseController
{
    public function index()
    {
        $kul_adi="gulcanokman";
        $sifre="Y6q0vq2pgMSkHAUx";
        $adres="cluster0.5h6rw.mongodb.net";
        $veritabani="php";
        $koleksiyon_adi = "coffees";
        $client = new MongoDB\Client("mongodb+srv://$kul_adi:$sifre@$adres");
        $koleksiyon = $client->selectCollection($veritabani, $koleksiyon_adi);

        $coffees = $koleksiyon->find([]);

        return view('tema/Header').view('sayfalar/anasayfa', ['coffees' => $coffees]).view('tema/Footer');
    }

    public function test($ornek)
    {
        $kul_adi="gulcanokman";
        $sifre="Y6q0vq2pgMSkHAUx";
        $adres="cluster0.5h6rw.mongodb.net";
        $veritabani="php";
        $koleksiyon_adi = "coffees";
        $client = new MongoDB\Client("mongodb+srv://$kul_adi:$sifre@$adres");
        $koleksiyon = $client->selectCollection($veritabani, $koleksiyon_adi);

        $coffees = $koleksiyon->find([]);
    }
}
