<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CrudController extends Controller
{
    public function add(){
        DB::table("Senetler")->insert([
            "musteri" => "ornek",
            "vade_sayisi" => 2,
            "odenen_vadeler" => 1,
            "kalan_Vadeler" =>1,
            "filitreleme" => "acik"
        ]);
    }

    public function update(){
        DB::table("Senetler")->where("id",1)->update([
            "musteri" => "guncel"
        ]);
    }

    public function delete(){
        DB::table("Senetler")->where("id",1)->delete();
    }

    public function info(){
        $veriler = DB::table("Senetler")->get();

        foreach($veriler as $key => $value){
            echo $value -> id . " " . $value -> musteri;
            echo "<br>";
        }
        
    }

    public function findById(){
        $veri = DB::table("Senetler")->where("id",3)->first();
        echo $veri -> musteri;
    }
}
