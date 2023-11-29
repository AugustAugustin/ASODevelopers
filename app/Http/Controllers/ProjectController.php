<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $slug =  $request->input('slug');
        $projects = $slug ? Project::where('slug', '=', $slug)->get() : Project::all();
        return view('project.index', ['projects' =>  $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);
        Project::create($data);
        return redirect('projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('project.show', ['project' => Project::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('project.edit', ['project' => Project::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);
        $project = Project::find($id);
        $project->update($data);
        return redirect('projects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::destroy($id);
        return redirect('projects');
    }
}
