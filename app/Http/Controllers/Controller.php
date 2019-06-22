<?php

namespace App\Http\Controllers;

use App\Project;
use App\Gallery;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index(){
        $projects=Project::all();
        $galleries=Gallery::take(8)->get();
        return view('home',compact('projects','galleries'));
    }
}
