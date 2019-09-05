<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('projects.create');
    }

    public function store(CreateProjectRequest $request)
    {
        
        Project::create($request->validated());
        /*Project::create(request()->all());
        segunda opcion para agregar datos masivos a la BD Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description')
        ]);*/

        return redirect()->route('projects.index');
    }

   
}