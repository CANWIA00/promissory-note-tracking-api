<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Senetler;

class Iletisim extends Controller
{
    public function index(){
        return view("iletisim");
    }

    public function add(Request $request){
        $musteri = $request->musteri;
        $vade_sayisi = $request->vade_sayisi;
        $odenen_vadeler = $request->odenen_vadeler;
        $kalan_vadeler = $request->kalan_vadeler;
        $filitreleme = $request->filitreleme;

        Senetler::create([
        "musteri" => $musteri,
        "vade_sayisi" =>$vade_sayisi,
        "odenen_vadeler" => $odenen_vadeler,
        "kalan_vadeler"=> $kalan_vadeler,
        "filitreleme"=>$filitreleme,
       ]);


       echo "Bilgileriniz basarili bir sekilde kaydedilmistir!";
    }
}
