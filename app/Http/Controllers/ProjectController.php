<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function __construct()
     {
         $this->middleware('auth')->except('index', 'show');  //ruta de protecion de proyectos auth viene del kernel.app
     }

     public function index()
    {
        $projects = Project::latest()->paginate();
        //Project::latest('updated_at')->get(); Por fecha de actualizacion
        //Project::latest('updated_at')->paginate(); Para paginar los resultados

        return view('projects.index', compact ('projects'));

    }

    public function show(Project $project)
    {

        return view('projects.show', [
            'project' => $project
        ]);

    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        
        Project::create($request->validated());
        /*Project::create(request()->all());
        segunda opcion para agregar datos masivos a la BD Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description')
        ]);*/

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con exito');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
        
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con exito');
    
    }
   
    public function destroy(Project $project)
    {
        $project->delete();
         
        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con exito');
    
        
    }
}