<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function show(){
        return view("form");
    }

    public function sonuc(Request $request){
        return $request->text;
    }

}
