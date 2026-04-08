<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ctrlDatos extends Controller
{
    public function AccesoDatos(){
        $pro = Product::all();

        Return view('vistadatos')->with(compact('pro'));
    }
}
