<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
       $projects = Project::latest()->get();
       return view('public.index', [
           'projects' => $projects,
       ]);
    }

    public function admin(){
       $projects = Project::latest()->get();
       return view('projects', [
           'projects' => $projects,
       ]);
    }

    public function store(Request $req){
        $featured_image = $req->file('featured_image')->store('featured_images');
        Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'slug' => request('slug'),
            'excerpt' => request('excerpt'),
            'featured_image' => $featured_image,
            'project-trixFields' => request('project-trixFields'),
            'attachment-project-trixFields' => request('attachment-project-trixFields')
        ]);

        return  back();
    }

    public function show($id){
        $project = Project::findOrFail($id);
        
        return view('project', [
            'project' => $project,
        ]);
    }

    public function details($slug){
        $project = Project::where('slug', $slug)->first();
        $previous = Project::where('id', '>', $project->id)->min('id');
        $previous_project = Project::where('id', $previous)->first();
        $next = Project::where('id', '<', $project->id)->max('id');
        $next_project = Project::where('id', $next)->first();

        return view('public.details', [
            'project' => $project,
            'next' => $next_project,
            'previous' => $previous_project,
        ]);
    }

    public function update(Request $req, $id){
        $featured_image;
        if($req->file('featured_image')){
            $featured_image = $req->file('featured_image')->store('featured_images');
        }
        $project = Project::findOrFail($id);
        
        $project->title = request('title');
        $project->url = request('url');
        $project->slug = request('slug');
        $project->excerpt = request('excerpt');
        if ($req->has('featured_image')) {
            $project->featured_image = $featured_image;
        }
        $project['project-trixFields'] = request('project-trixFields');
        $project['attachment-project-trixFields'] = request('attachment-project-trixFields');

        $project->save();
        
        return  back();
    }

    public function destroy(){
        
    }

    public function temperature($temp){
        return view('public.temperature', [
            "temperature" => $temp,
        ]);
    }
}
