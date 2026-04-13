<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Http;

class ctrlDatos extends Controller
{
    public function AccesoDatos(){
        $pro = Product::all();

        Return view('vistadatos')->with(compact('pro'));
    }

    public function AccesoDatosLink(){

        $enlace = Http::get('https://jsonplaceholder.typicode.com/posts');

        $traductorJson = $enlace->json();

        Return view('vistadatoslink')->with(compact('traductorJson'));
    }

    public function AccesoDatosLinkMundoITI(){

        $enlace = Http::get('https://holisss.mundoiti.com/');

        $traductorJson = $enlace->json();

        Return view('vista_mundoiti')->with(compact('traductorJson'));
    }

    public function AccesoDatosJC(){

        $enlace = Http::get('https://juliocesarcruzgarcia.netlify.app/json/titanic.json');

        $traductorJson = $enlace->json();

        Return view('vistajc')->with(compact('traductorJson'));
    }

}
