<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;
class ProjectTasksController extends Controller
{
    //
    public function store(Project $project)
    {   
    $attributes = request()->validate(['description' => 'required']);
    $project->addTask($attributes);
    return back();
    
            
            
        
        // $project->addTask($project);
        // return back();
        
        // // $project->addTask(
        // //     request()->validate(['description'=> 'required'])
        // //     );
        // $project->addTask(request('description'));
            
            
            
            
        

    }
        
          
    public function update(Task $task)
        {
            
            if(request()->has('completed')){
                $task->complete();
            }else{
                $task->incomplete();
            }
            return back();
            /*
            $task->complete(request()->has('completed'));
            return back();*/
    }
}
