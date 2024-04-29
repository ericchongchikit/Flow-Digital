<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class Posts extends Component
{
    public $posts=[];

    public function mount(){
        $this->posts=Post::all(); 

        $user = Auth::user();
        if ($user) {
            $this->posts = Post::where('createdByEmail', $user->email)->get();
        } else {
            // If the user is not authenticated, get all posts
            $this->posts = Post::all();
        }
    }

    public function render()
    {
        // dd(Auth::user()->name);
        return view('livewire.posts');
    }

    public function deletepost(Post $postId)
    {
        $postId->delete();
        session()->flash('success','Post have been deleted');
        return $this->redirect('/posts',navigate:true);
    }
}
