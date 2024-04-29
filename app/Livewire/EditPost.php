<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;

class EditPost extends Component
{
    public $post;
    public $title;
    public $urlSlug;
    public $metaDescription;
    public $description;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->urlSlug = $post->urlSlug;
        $this->metaDescription = $post->metaDescription;
        $this->description = $post->description;
    }

    public function render()
    {
        return view('livewire.edit-post');
    }

    public function updatePost()
    {
        $validated = $this->validate([
            'title' => 'required|max:255',
            'urlSlug' => 'required|unique:posts',
            'metaDescription' => 'required|max:255',
            'description' => 'required'
        ]);
        // Generate slug from the title
        $this->urlSlug = Str::slug($this->title);

        // Check if the generated slug already exists
        if (Post::where('urlSlug', $this->urlSlug)->exists()) {
            $this->urlSlug = $this->urlSlug . '-' . uniqid();
            // create uniqid if exist already exists
        }

        $validated['urlSlug'] = $this->urlSlug;

        $this->post->update($validated);
        session()->flash('success', 'Post have been updated sucessfully');
        return $this->redirect('/posts', navigate: true);
    }
}
