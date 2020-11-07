<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;


class ProjectController extends Controller
{
    public function index() {
      return view('projects.index',[
	'project' => Project::latest()->paginate()
      ]);
    }
    public function show($id){
      return view('projects.show',[
	'project' => Project::findOrFail($id)
      ]);
    }

}
