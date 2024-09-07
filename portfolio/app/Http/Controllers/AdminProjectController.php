<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class AdminProjectController extends Controller
{
    public function create()
    {
        $projects=Projects::all();
        $posts=Post::all();
        return view('admin')->with('projects', $projects)->with('posts', $posts);
    }

    public function upload(Request $request)
{
    // Validation
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'date' => 'required|date',
        'client' => 'required|string|max:255',
        'description' => 'required|string',
        'link' => 'url',
        'link_puesdo' => 'string|max:255',
        'second_description' => 'required|string',
        'slogan' => 'string|max:255',
        'role' => 'string|max:100',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:5120', 
    ]);

    // Handle image uploads and associate them with the project
    $images = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('images', 'public'); // Store the image in the 'public/images' directory
            $images[] = $path;
        }
    }

    // Create the project and link images
    $project = Projects::create($validatedData);
    foreach ($images as $imagePath) {
        $project->images()->create(['image_path' => $imagePath]);
    }

    // Redirect back or to a success page
    return redirect()->route('admin.upload.form')->with('success', 'Project uploaded successfully');
}

    public function index() {
    $projects = Projects::all();
    $posts = Post::all();
    return view('welcome')->with('projects', $projects)->with('posts', $posts);
    }
// Show the edit form for a project
    public function edit(Projects $project)
    {
        
        return view('edit')->with('project', $project);
    }

    // Update the project
    public function update(Request $request, $id)
{
    // Validation for updating a project
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'date' => 'required|date',
        'client' => 'required|string|max:255',
        'description' => 'required|string',
        'link' => 'url',
        'link_puesdo' => 'string|max:255',
        'second_description' => 'required|string',
        'slogan' => 'string|max:255',
        'role' => 'string|max:100',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
    ]);

    // Find the project by its primary key (id)
    $project = Projects::find($id);

    if ($project) {
        // Handle image updates
        if ($request->hasFile('images')) {
            // Delete existing images (both database records and files)
            $project->images->each(function ($image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            });

            // Store and associate the new images
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                $project->images()->create(['image_path' => $path]);
            }
        }

        // Update the project's attributes
        $project->update($validatedData);

        return redirect()->route('admin.upload.form')->with('success', 'Project and images updated successfully');
    } else {
        // Handle the case where the project is not found
        // You can redirect with an error message or perform any other action
    }
}



    // Show confirmation form for deleting a project
    public function confirmDelete(Projects $project)
    {
        return view('admin.confirm-delete', compact('project'));
    }

    // Delete the project
    public function delete(Projects $project)
{
    // Get the image paths associated with the project
    $imagePaths = $project->images->pluck('image_path')->all();

    // Delete project and associated images from the database
    $project->images()->delete();
    $project->delete();

    // Delete the associated image files from storage
    foreach ($imagePaths as $imagePath) {
        \Storage::disk('public')->delete($imagePath);
    }

    // Redirect back or to a success page
    return redirect()->route('admin.upload.form')->with('success', 'Project and images deleted successfully');
}
// post upload function
public function uploadPost(Request $request)
{
    // Validation
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'read_time' => 'required|string|max:255',
        'sub_title' => 'required|string|max:255',
        'text1' => 'required|string',
        'post_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image files
    ]);

    // Handle image uploads
    $images = [];
    if ($request->hasFile('post_images')) {
        foreach ($request->file('post_images') as $image) {
            $path = $image->store('images', 'public'); // Store the image in the 'public/images' directory
            $images[] = $path;
        }
    }

    // Create the blog post
    $post = Post::create([
        'title' => $validatedData['title'],
        'author' => $validatedData['author'],
        'read_time' => $validatedData['read_time'],
        'sub_title' => $validatedData['sub_title'],
        'text1' => $validatedData['text1'],
        // Handle image uploads
        'images' => json_encode($images)
    ]);

    // Redirect back or to a success page
    return redirect()->route('admin.upload.form')->with('success', 'Post uploaded successfully');
}

}
