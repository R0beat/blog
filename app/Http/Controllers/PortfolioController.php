<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)//Cuando tenemos 1 metodo en el controlador
    {
    $portfolio = [

        ['title' => 'Proyect #1'],
        ['title' => 'Proyect #2'],
        ['title' => 'Proyect #3'],
        ['title' => 'Proyect #4'],
    ];
        return view('portfolio',compact('portfolio'));
    }
}
