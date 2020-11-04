<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

use DB;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::latest()->paginate(1); 
        return view('portfolio',compact('project'));
    }

    
}
