<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

       

        //tutti i treni con la data di oggi
        $trains = Train::whereDate('departure',today() )->get();
        return view('home', compact('trains'));
    }
}