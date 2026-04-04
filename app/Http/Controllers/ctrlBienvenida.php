<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlBienvenida extends Controller
{
    //
    public function Bienvenidos(){
        return view('Holisss');
    }

    public function Suma(){

        $c = 6 + 5;
        return $c;
    }

    //Controlador dinamico
    public function Suma2($n1, $n2){
        $r = $n1 + $n2;
        return ($r);
    }

    // Mostrar datos en vista welcome
    public function Suma3($n1, $n2){
        $r = $n1 + $n2;
        return view('Holisss', compact('n1'. 'n2', 'r'));
    }
}
