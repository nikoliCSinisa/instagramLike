<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    // Show the aplication Profiles

    public function index( $user )
    {
        $user = User::find( $user );
        
        return view('home', [
            'user' => $user,
        ]);
    }
}
