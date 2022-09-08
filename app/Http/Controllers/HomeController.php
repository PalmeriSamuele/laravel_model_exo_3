<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $membres = Membre::all();
        $males = Membre::all()->where('genre','Homme');
        $malesold = $males
        ->where('genre','Homme')
        ->where('age','>=','18')
        ->where('age','<=','24');
   
       
        $females = Membre::all()->where('genre','Femme');

        $femalesold = $females
        ->where('genre','Femme')
        ->where('age','>=','18')
        ->where('age','<=','24');

        $others = Membre::
        where('age','<','18')
        ->orWhere('age','>','24')->get();
        return view('welcome',compact('membres','males','females','malesold','femalesold','others'));
    }
}
