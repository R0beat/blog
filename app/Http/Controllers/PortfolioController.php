<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = [
            ['title' =>'Proyecto1'],
             ['title' =>'Proyecto2'],
              ['title' =>'Proyecto3'],
               ['title' =>'Proyecto4'],
        ];
        return view('portfolio',compact('portfolio'));
    }

    
}
