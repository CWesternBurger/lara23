<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlDatos extends Controller
{
    public function AccesoDatos(){
        return view('vistadatos');
    }
}
