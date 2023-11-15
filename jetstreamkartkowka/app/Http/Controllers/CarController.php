<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function showCar(Request $req){
        $req->validate([
            'marka'=>'required|min:2|max:15',
            'email'=>'required | email',
        ],
        [   
            'marka.required'=>"Pole :attribute jest wymagane",
            'email.required'=>"Pole :attribute jest wymagane",
            "marka.min"=>"Pole :attribute musi zawierać wiecej niz :min znaki/ów",
            "marka.max"=>"Pole :attribute nie moze zawierać wiecej niz :max znaki/ów",
            'email.email'=>"Pole :attribute musi być emailem!"


        ]);
        
        $dane =[
            'marka'=>$req->input('marka'),
            'email'=>$req->input('email'),
            'pojemnosc'=>$req->input('pojemnosc')
        ];
        return view('test',$req);
        
    }

}
