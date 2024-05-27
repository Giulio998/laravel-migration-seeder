<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

       

        //tutti i treni con la data di oggi
        $trains = Train::where('departure','=','2024-05-27' )->get();
        return view('home', compact('trains'));
    }
}