<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function follow(User $user)
     {
         auth()->user()->follow($user);
    
         return redirect()->back()->with('success', 'Ahora sigues a ' . $user->name);
     }
    
     public function unfollow(User $user)
     {
         auth()->user()->unfollow($user);
    
         return redirect()->back()->with('success', 'Has dejado de seguir a ' . $user->name);
     }
}
