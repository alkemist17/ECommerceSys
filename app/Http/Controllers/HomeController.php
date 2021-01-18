<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Se Utiliza __invoke cuando se crea una unica ruta
    public function __invoke(){
        /* return view('welcome');*/
        return view('home');
    }
}
