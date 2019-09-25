<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\User;

use Redirect;

class HomeController extends Controller
{
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
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $tasks = Task::all();
        $users = User::all();
        
        return view('home')->with('tasks', $tasks)->with('users', $users);
    }
    
    /**
     * Show filtered tasks.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function filtered($filter)
    {
        // Confirm the filter is an expected value.
        if(!is_int($filter)){
          //return Redirect::back();  
        } 
        
        $tasks = Task::where('status', '=', $filter)->get();
        $users = User::all();
        
        return view('home')->with('tasks', $tasks)->with('users', $users);
    }
}
