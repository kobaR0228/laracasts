<?php

Route::get('/', function () {
    return view('welcome');
});


Route::resource('projects', 'ProjectController');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

/*Route::get('/projects', 'ProjectController@index');
Route::get('/projects/create', 'ProjectController@create');
Route::get('/projects/{project}', 'ProjectController@show');
Route::get('/projects/{project}/edit', 'ProjectController@edit');
Route::patch('/projects/{project}', 'ProjectController@update');
Route::delete('/projects/{project}', 'ProjectController@destroy');




Route::post('/projects', 'ProjectController@store');
*/


/*Route::get('/contact', function(){
    return view('contact');
});
    
Route::get('/about', function(){
    return view('about');
});*/

/*Route::get('/', function () {
    /*$tasks =[
        'go to the store',
        'go to school',
        'go to the office'
        ];
        
    return view('welcome')->withTasks([
        'go to the store',
        'go to school',
        'go to the office'
        ]);
        
    /*return view('welcome', [
        'tasks'=>$tasks,
        'foo'=>'foobar'
        ]); 
    
    
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
