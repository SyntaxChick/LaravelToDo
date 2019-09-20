<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
// Redirect
// Data Validation
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
    
     /**
     * Store new task
     * - Pass in validated data
     * 
     *
     * @return Redirect
     */
    public store(){
       
    }
    
     /**
     * Edit task form
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public edit(){
        
    }
    
     /**
     * Update task
     *
     * @return Redirect
     */
    public update(){
        
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
    public delete(){
        
    }
}
