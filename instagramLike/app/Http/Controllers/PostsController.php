<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    //Authentication of user 

    public function __construct()
    {
        $this->middleware('auth');
    }

    //Functions for posts

    //Call a view create.blade.php page for creating posts
    public function create(){

        return view( 'posts.create' );
    }

    // Validating and store post elements
    public function store(){
        //validating data
        $data = request()->validate([
                'caption' => 'required',
                'image' => ['required', 'image'],
        ]);
        
        //Storing image path using Image class

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();
        
        //check if it user log in and create post
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id );
    }

        //Show method for calling view show.blade.php page for showing single post
        public function show( \App\Post $post ){
           
            return view( 'posts.show', compact( 'post'));
        }
}
