<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //


    public function index(){
        $trains = Train::whereDate('departire_time', today() )->get();
        return view('guest.trains.index',compact('trains'));
    }

}
