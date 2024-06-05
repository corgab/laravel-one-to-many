<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:255|unique:projects',
            'description'=>'max:65000',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'project_url'=>'required|url|unique:projects',
            'technologies_used'=>'required'
        ]);

        $form_data = $request->all();

        $new_project = Project::create($form_data);

        return to_route('admin.projects.index', $new_project);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title'=>'required|max:255|unique:projects',
            'description'=>'max:65000',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'project_url'=>'required|url|unique:projects',
            'technologies_used'=>'required'
        ]);

        $form_data = $request->all();

        $project->update($form_data);

        return to_route('admin.projects.index', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return to_route('admin.projects.index');
    }
}
