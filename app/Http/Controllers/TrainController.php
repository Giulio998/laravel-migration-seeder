<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        //data di oggi
        
        //debug
        //dd($today);
        //$trains = Train::all();
        //debug
        //dd($trains);

        //tutti i treni con la data di oggi
        $trains = Train::where('giorno_partenza','=','2024-05-27' )->get();
        return view('home', compact('trains'));
    }
}