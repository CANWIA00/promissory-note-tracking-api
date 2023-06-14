<?php

namespace App\Http\Controllers;

use App\Senetler;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class SenetController extends Controller
{
    public function getAllCostumer(){
        $field = Senetler::findAll();
        return view('senet')->with('field',$field);    
    }

    public function getCostumerById(Request $request){
        $field = Senetler::findById($request->id);
        return $field;
    }

    public function deleteCustomerById(Request $request){
       $field = Senetler::deleteById($request->id);
    }

    public function createCustomer(Request $request){
       $field = Senetler::createS($request->all());
    }

    public function updateCustomerById($id, Request $request){
        $field = Senetler::updateByIdS($id,$request);
    }
}
