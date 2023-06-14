<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelIslemleri;

class ModelController extends Controller
{

    public function findById(){

        //$entity = ModelIslemleri::where("id",2)->first(); 
        //$entity = ModelIslemleri::whereId(2)->first();
        // ayni kullanimlar
        $entity = ModelIslemleri::find(2);
        
        echo $entity -> musteri;
    }

    public function add(){

        ModelIslemleri::create([
            "musteri"=>"yeni musteri",
            "vade_sayisi"=>3,
            "odenen_vadeler"=>1,
            "kalan_vadeler"=>2,
            "filitreleme" =>"acik",
        ]);
    }

    public function update(){


        ModelIslemleri::whereId(4)->update([
            "musteri" => "ggggg"
        ]);
    }


    public function delete(){
        ModelIslemleri::whereId(6)->delete();
    }

}
