<?php

namespace App\Http\Controllers\administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class presentacion extends Controller
{
    //
    public function historia(){
        return view ('empresa.historia');
    }
    public function mision(){
        return view ('empresa.mision-vision');
    }
}
