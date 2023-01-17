<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $Trains = Train::all();
        return view('pages.welcome', compact('Trains'));
    }
}
