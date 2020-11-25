<?php

namespace App\Http\Controllers\inventariogato;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class producto extends Controller
{
    //
    public function alimentos(){
        $alimento1 = [
            'Codigo=211',
            'Presio=73.200'
        ];

        $alimento2 = [
            'Codigo=212',
            'Presio=70.200'
        ];
        $alimento3 = [
            'Codigo=213',
            'Presio=78.200'
        ];
        $alimento4 = [
            'Codigo=114',
            'Presio=22.200'
        ];
        
        $mensaje = "Bienvenidos a las ofertas de papeleria";

        $carton = [
            '009',
            'Carton Paja',
            '2500'
        ];

        $colores = [
            '011',
            'Colores Norma',
            '10.000'
        ];

        return view('productosgato.alimentos')
        ->with('ali1', $alimento1)
        ->with('ali2', $alimento2)
        ->with('ali3', $alimento3)
        ->with('ali4', $alimento4)
        ->with('msg',$mensaje)
        ->with('carton', $carton)
        ->with('color', $colores);;
    }
}
