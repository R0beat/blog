<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function index() {
      return view('projects.index',[
	     'project' => Project::latest()->paginate(8)
      ]);
    }
    public function show(Project $project){ //Route Model Binding
      return view('projects.show',[
	     'project' => $project
      ]);
    }
    public function create() {
      return view('projects.create',[
        'project' => new Project]);
    }
    public function store(SaveProjectRequest $request) {
      Project::create($request -> validated() );
     
      return redirect()->route('projects.index')->with('status',__('The project was created successfully'));

    }
    public function edit(Project $project) {
      return view('projects.edit',[
	     'project' => $project //array project lo guardamos en la variable proyec
      ]);
      
    }
    public function update(Project $project,SaveProjectRequest $request) {
      $project->update( $request->validated() );
      return redirect()->route('projects.show',$project)->with('status',__('The proyect updated successfully')); 
    }
    public function destroy(Project $project) {
      $project->delete();
      return redirect()->route('projects.index')->with('status',__('Proyect successfully removed'));
    }

    public function __construct() {
      //Protegemos las rutas auth exepto las rutas index y show
      $this->middleware('auth')->except('index','show');
    }
}
