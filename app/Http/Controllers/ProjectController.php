<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

use App\Http\Requests\SaveProjectRequest;

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
      return view('projects.create',[
        'project' => new Project]);
    }
    public function store(SaveProjectRequest $request) {
      Project::create($request -> validated() );
     
      return redirect()->route('projects.index');

    }
    public function edit(Project $projects){
      return view('projects.edit',[
	'project' => $projects
      ]);
      
    }
    public function update(Project $projects,SaveProjectRequest $request){
      
      $projects->update( $request->validated() );
      return redirect()->route('projects.show',$projects); 
    }

}
