<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class ViewPost extends Component
{
    public $post;

    public function mount($urlslug){
        // $this->post = $postid;
        $this->post = Post::where('urlSlug', $urlslug)->firstOrFail();

    }
    public function render()
    {
        return view('livewire.view-post');
    }
}
