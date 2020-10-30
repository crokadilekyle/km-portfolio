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

    public function store(Request $req){
        $featured_image = $req->file('featured_image')->store('featured_images');
        Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'excerpt' => request('excerpt'),
            'featured_image' => $featured_image,
            'project-trixFields' => request('project-trixFields'),
            'attachment-project-trixFields' => request('attachment-project-trixFields')
        ]);

        return  back();
    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
