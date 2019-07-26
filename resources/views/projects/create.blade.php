<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a new Project</title>
     <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
 <h1>Create a new Project</h1>
 <form method="POST" action="/projects">
     {{ csrf_field() }}
     <div class="field">
         <label class="label" for="title">Project Title</label>
         
         <div class="control">
             <div>
                 <input type="text" name="title" placeholder="Project title" value="{{ old('title')}}"/>
             </div>
         </div>
     </div>
     <div class="field">
         <label class="label" for="description" >Project Title</label>
         
         <div class="control">
             <div>
                <textarea name="description" placeholder="description">{{ old('description')}}</textarea>
             </div>
         </div>
     </div>
     <div class="field">
         
         <div class="control">
             <div>
               <button type="submit">Create Project</button>
             </div>
         </div>
     </div>
     
     @include('errors')
 </form>
</body>
</html>