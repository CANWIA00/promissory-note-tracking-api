<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelIslemleri extends Model
{
    protected $table = "Senetler";

    protected $fillable = [
        "musteri",
            "vade_sayisi",
            "odenen_vadeler",
            "kalan_vadeler",
            "filitreleme"
    ];
}
