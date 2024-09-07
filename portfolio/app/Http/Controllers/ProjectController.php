<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{
    //display single projects
    public function show($title)
{
    // Fetch the project by title
    $project = Projects::where('title', $title)->first();

    if ($project) {
        return view('single', compact('project'));
    }
}

}
