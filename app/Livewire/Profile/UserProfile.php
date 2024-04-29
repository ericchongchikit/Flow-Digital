<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserProfile extends Component
{
    public $userProf;

    public function mount(){
        $this->userProf=User::all(); 

        $user = Auth::user();
        if ($user) {
            $this->userProf = User::where('email', $user->email)->firstOrFail();
        } else {
            $this->userProf = User::all();
        }
    }

    // $this->posts=Post::all(); 

    // $user = Auth::user();
    // if ($user) {
    //     $this->posts = Post::where('createdByEmail', $user->email)->get();
    // } else {
    //     // If the user is not authenticated, get all posts
    //     $this->posts = Post::all();
    // }

    public function render()
    {
        return view('livewire.profile.user-profile');
    }
}
