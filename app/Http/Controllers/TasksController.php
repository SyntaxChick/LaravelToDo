<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreTaskRequest;

use App\Task;
use Redirect;
use Auth;
// Session? for flashing?

class TasksController extends Controller
{
    //
    
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function create()
    {
        return view('create');
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
    public function edit(){
        
    }
    
     /**
     * Update task
     *
     * @return Redirect
     */
    public function update(){
        
    }
    
    /**
     * Update status
     * - one click status update?
     *
     * @return ??
     */
    
    
    /**
     * Delete task
     *
     *
     * @return Redirect
     */
    public function delete(){
        
    }
}
