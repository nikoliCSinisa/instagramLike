<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    // Show the aplication Profiles

    public function index( $user )
    {
        $user = User::findOrFail( $user );
        
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
