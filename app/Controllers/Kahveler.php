<?php

namespace App\Controllers;

use MongoDB;
class Kahveler extends BaseController
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

        return view('tema/Header').view('sayfalar/kahveler', ['coffees' => $coffees]).view('tema/Footer');
    }

}
