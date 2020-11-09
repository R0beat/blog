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
    public function show(Project $projects){ //Route Model Binding
      return view('projects.show',[
	'project' => $projects
      ]);
    }
    public function create() {
      return view('projects.create');
    }

}
