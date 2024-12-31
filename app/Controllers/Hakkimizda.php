<?php

namespace App\Controllers;

use MongoDB;
class Hakkimizda extends BaseController
{
    public function index()
    {
        $kul_adi="gulcanokman";
        $sifre="Y6q0vq2pgMSkHAUx";
        $adres="cluster0.5h6rw.mongodb.net";
        $veritabani="php";
        $koleksiyon_adi = "hakkimizda";
        $client = new MongoDB\Client("mongodb+srv://$kul_adi:$sifre@$adres");
        $koleksiyon = $client->selectCollection($veritabani, $koleksiyon_adi);

        $hakkimizda = $koleksiyon->find([]);

        return view('tema/Header').view('sayfalar/hakkimizda', ['hakkimizda' => $hakkimizda]).view('tema/Footer');
    }

}
