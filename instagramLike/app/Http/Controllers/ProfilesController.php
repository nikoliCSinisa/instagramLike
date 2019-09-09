<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    // Show the aplication Profiles

    public function index( User $user )
    {
        
        return view('profiles.index', compact( 'user' ) );
    }

    // Edit user profile
    public function edit( User $user){

        return view( 'profiles.edit', compact( 'user' ) );
    }

    // Upadate user profile
    public function update( User $user){

        $data = request()->validate([
                'title' => 'required',
                'description' => 'required',
                'url' => 'url',
                'image' => '',
        ]);

        $user->profile->update( $data );

        return redirect("/profile/$user->id");
    }
}
