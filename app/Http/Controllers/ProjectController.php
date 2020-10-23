<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
       $projects = Project::latest()->get();
       return view('index', [
           'projects' => $projects,
       ]);
    }

    public function store(){
        Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'project-trixFields' => request('project-trixFields'),
        ]);

        return back();
    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
