<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreTaskRequest;

use App\Task;
use App\User;
use Redirect;
use Auth;
// Session? for flashing?

class TasksController extends Controller
{
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Viewing is handled in the HomeController, so everything in this 
        // controller can be hidden behind a login. 
        $this->middleware('auth');
    }
    
    
    /**
     * Create task form
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        
        $users = User::all();
        
        return view('create')->with('users', $users);
    }
    
    
     /**
     * Store new task
     * - Pass in validated data
     * 
     *
     * @return Redirect
     */
    public function store(StoreTaskRequest $request){
       
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->assigned_to = $request->assigned;
        $task->created_by = Auth::user()->id;
        
        $task->save();
        
        return Redirect::route('home');
        
    }
    
    
     /**
     * Edit task form
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Task $task){
        
        return view('edit')->with('task', $task);
        
    }
    
    
     /**
     * Update task
     *
     * @return Redirect
     */
    public function update(StoreTaskRequest $request){
        
        $task = Task::find($request->id);
        
        $task->name = $request->name;
        $task->description = $request->description;
        $task->status = $request->status;
        
        $task->save();
        
        
        return Redirect::route('home');    
    }
    
    
    /**
     * Complete Task
     * - To do apps should always have one-click complete options
     *
     * @return Redirect
     */
    public function complete(Task $task)
    {
      if($task->status != 10){
        $task->status = 10; 
      } else {
        $task->status = 0;
      }
        
        $task->save();
        
        return Redirect::back();
    }
    
    
    /**
     * Delete task
     *
     *
     * @return Redirect
     */
    public function delete(Task $task){
        
        $task->delete();
        
        return Redirect::back();
    }
}
