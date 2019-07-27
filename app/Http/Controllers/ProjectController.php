<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Services\Twitter;
use Illuminate\Filesystem\Filesystem;

class ProjectController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        
        $projects = Project::where('owner_id', auth()->id())->get();
        
        return view('projects.index',['projects'=>$projects]);        
    }
    public function create(){
        
        
        return view('projects.create');        
    }
    public function store(){
       $attributes = request()->validate([
            'title'=> ['required', 'min:3', 'max:20'],
            'description' => ['required', 'min:3', 'max:200']
            ]);
            
            $attributes['owner_id']= auth()->id();
         Project::create($attributes);
        /*Project::create([
            'title' => request('title'),
            'description' => request('description')
            ]);
        $project = new Project();
        
        $project->title = request('title');
        $project->description =request('description');
        
        $project->save(); */
        
        return redirect('/projects');
        
        //return request()->all(); POSTしたものをリクエストできる
        //return request('title'); するとタイトルが表示される
    }
    public function show(Project $project)
    {
      
      abort_if($project->owner_id !== auth()->id(), 403);
        return view('projects.show', ['project'=>$project]);
        //return view('projects.show',['project'=>$project]);
        
    }
    public function edit(Project $project){
       
        return view('projects.edit',['project'=>$project]);
    }
    public function update(Project $project){
        
       $project->update(request(['title', 'description']));
       /*
       $project->title =request('title');
       $project->description =request('description');
       
       $project->save(); */
       
       return redirect('/projects');
        
    }
    public function destroy(Project $project){
        
        //$project = Project::findOrFail($id);
        $project->delete();
        return redirect('/projects');
    }
    
    

}
