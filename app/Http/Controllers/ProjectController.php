<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectImage;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('date','desc')->simplePaginate(15);

        return view('projects.index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'description' => 'required',
            'images' => 'image|required|max:1999'
        ]);

         // Create project
         $project = new Project;
         $project->title = $request->input('title');
         $project->body = $request->input('body');
         $project->user_id = auth()->user()->id;
         $project->save();
        
        foreach ($request->file as $file) {
             // Get filename with the extension
             $filenameWithExt = $file('images')->getClientOriginalName();
             // Get just filename
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
             // Get just ext
             $extension = $file('images')->getClientOriginalExtension();
             // Filename to store
             $fileNameToStore= $filename.'_'.time().'.'.$extension;
             // Upload Image
             $path = $file('images')->storeAs('public/project_images', $fileNameToStore);

             $image = new ProjectImage;
             $image->name = $fileNameToStore;
             $image->project_id =$project->id;
             $image->save();
             
        }

        return redirect()->back()->with('success', 'Project Created');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
