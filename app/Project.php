<?php

namespace App;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectCreated;

class Project extends Model
{
    //
    protected $guarded =[];
    

  
    
    public function tasks(){
        return $this->hasMany(Task::class);
    }
  
    public function addTask($attributes)
    {
         $this->tasks()->create($attributes);
         
        // return  Task::create([
        // 'project_id' => $this->id,
        //  'description' => $attributes
        //  ]);
    }
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}


