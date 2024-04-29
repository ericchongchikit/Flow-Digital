<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Homepage extends Component
{
    public $posts=[];

    public function mount(){
            $this->posts = Post::all();
    }

    public function render()
    {
        // dd(Auth::user()->name);
        return view('livewire.homepage');
    }
}
