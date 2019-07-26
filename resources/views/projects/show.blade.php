@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    
    <div class="content">{{ $project->description }}</div>
    
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>
    
    <div>
        @foreach($project->tasks as $task)
            <div>
                <form>
                    <lable class="checkbox" for="completed">
                        <input type="checkbox" name="completed">
                        {{ $task->description }}
                    </lable>
                </form>
            </div>
        @endforeach
    </div>
   
    
    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
        @csrf
        <div class="field">
            <label class="label" for="description">New Task</label>
            
            
            <div class="control">
                <input type="text" class="input" name="description" placeholder="NewTask"/>
            </div>
        </div>
        
     <div class="field">
         
         <div class="control">
               <button type="submit"> Tasks</button>
         </div>
     </div>
     
     @include('errors')

     
    </form>
    

   

@endsection

