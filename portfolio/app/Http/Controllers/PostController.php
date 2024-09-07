<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // Retrieve the post from the database and pass it to the view for editing
        return view('edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            
            // Add more validation rules for other fields if needed
        ]);

        // Update the post with the new data
        $post->update($request->all());

        // Redirect back to the edit form with a success message
        return redirect()->route('posts.edit', $post)->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        // Delete associated images from storage
        foreach ($post->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }

        // Delete associated images from the database
        $post->images()->delete();

        // Delete the post itself
        $post->delete();

        // Redirect back or to a success page
        return redirect()->route('admin.upload.form')->with('success', 'Post and associated images deleted successfully');
    }
    // upload images from the tinymce editor
    public function uploadImage(Request $request)
    {
        // Validate the uploaded image
        $request->validate([
            'image' => 'image|max:2048', // Adjust max file size as needed
        ]);

        // Store the uploaded image
        $imagePath = $request->file('image')->store('images', 'public'); // Store in 'public/images' directory

        // Return the URL of the stored image
        return response()->json(['location' => asset('storage/' . $imagePath)]);
    }

}
