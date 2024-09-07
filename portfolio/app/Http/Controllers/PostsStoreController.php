<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostsImage;
use Illuminate\Support\Str;

class PostsStoreController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string',
        'author' => 'required|string',
        'read_time' => 'required|string',
        'sub_title' => 'required|string',
        'text1' => 'required|string',
        'post_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as per your requirements
    ]);

    $post_images = [];
    if ($request->hasFile('post_images')) {
        foreach ($request->file('post_images') as $image) {
            $path = $image->store('post_images', 'public'); // Store the image in the 'public/images' directory
            $post_images[] = $path;
        }
    }
    // Save the validated data to create a new post
    $post = Post::create($validatedData);
    foreach ($post_images as $imagePath) {
        $post->images()->create(['image_path' => $imagePath]);
    }

    // Handle images upload (assuming you're storing image paths in another table)
    if ($request->hasFile('post_images')) {
        foreach ($request->file('post_images') as $image) {
            // Handle image uploading and store the path in the images table associated with the post
        }
    }

    return redirect()->route('admin.upload.form')->with('success', 'Post uploaded successfully!');
}
    public function show($slug) {
    // Convert the slug back to a title
    $title = str_replace('-', ' ', $slug);
    $title = Str::title($title);

    // Fetch the post by title
    $post = Post::where('title', $title)->firstOrFail();

    if ($post) {
        return view('single-post', compact('post'));
    }
}
    
}