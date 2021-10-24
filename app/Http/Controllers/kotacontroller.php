<?php

namespace App\Http\Controllers;

use App\Models\kota;
use Illuminate\Http\Request;



class kotacontroller extends Controller
{
    public function kota(){
        $kota = kota::all();

        return view('dashboard.kota', ['kota' => $kota]);
    }
}