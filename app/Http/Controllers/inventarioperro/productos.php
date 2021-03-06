<?php

namespace App\Http\Controllers\inventarioperro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productos extends Controller
{
    //
    public function alimentos(){
        $alimento1 = [
            'Codigo=111',
            'Presio=23.200'
        ];

        $alimento2 = [
            'Codigo=112',
            'Presio=10.200'
        ];
        $alimento3 = [
            'Codigo=113',
            'Presio=13.200'
        ];
        $alimento4 = [
            'Codigo=114',
            'Presio=22.200'
        ];
        
        $alimento5 = [
            'Codigo=11',
            'Presio=33.200'
        ];

        $alimento6 = [
            'Codigo=112',
            'Presio=30.200'
        ];
        $alimento7 = [
            'Codigo=13',
            'Presio=33.200'
        ];
        $alimento8 = [
            'Codigo=14',
            'Presio=28.200'
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

        return view('productosperro.alimentos')
        ->with('ali1', $alimento1)
        ->with('ali2', $alimento2)
        ->with('ali3', $alimento3)
        ->with('ali4', $alimento4)
        ->with('ali5', $alimento5)
        ->with('ali6', $alimento6)
        ->with('ali7', $alimento7)
        ->with('ali8', $alimento8)
        ->with('msg',$mensaje)
        ->with('carton', $carton)
        ->with('color', $colores);;
    }
}
