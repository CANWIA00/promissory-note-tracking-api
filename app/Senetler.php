<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Senetler extends Model
{

    protected $table = "Senetler";

    protected $fillable = [
        'musteri',
        'vade_sayisi',
        'odenen_vadeler',
        'kalan_vadeler',
        'filitreleme',
    ];

    public static function findAll(){
        $entity = Senetler::all();
        return $entity;
    }

    public static function findById($id){
        $entity = Senetler::find($id);
        return $entity;
    }

    public static function createS(  $request){
       

        $musteri = $request['musteri'];
        $vade_sayisi = $request['vade_sayisi'];
        $odenen_vadeler = $request['odenen_vadeler'];
        $kalan_vadeler = $request['kalan_vadeler'];
        $filitreleme = $request['filitreleme'];
        
        $entity =  Senetler::create([
        "musteri" => $musteri,
        "vade_sayisi" =>$vade_sayisi,
        "odenen_vadeler" => $odenen_vadeler,
        "kalan_vadeler"=> $kalan_vadeler,
        "filitreleme"=>$filitreleme
       ]);

        return $entity;
    }

    public static function updateByIdS($id,$request){
        $musteri = $request->musteri;
        $vade_sayisi = $request->vade_sayisi;
        $odenen_vadeler = $request->odenen_vadeler;
        $kalan_vadeler = $request->kalan_vadeler;
        $filitreleme = $request->filitreleme;

         $entity = Senetler::whereId($id)->update([
            "musteri" => $musteri,
            "vade_sayisi" =>$vade_sayisi,
            "odenen_vadeler" => $odenen_vadeler,
            "kalan_vadeler"=> $kalan_vadeler,
            "filitreleme"=>$filitreleme,
        ]);
        return $entity;
    }

    public static function deleteById($id){
        $entity = Senetler::whereId($id)->delete();

    }


}
