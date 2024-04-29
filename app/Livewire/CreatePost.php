<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CreatePost extends Component
{
    public $title = '';
    public $urlSlug = '';
    public $metaDescription = '';
    public $description = '';
    public $createdBy = '';
    public $createdByEmail = '';

    public function render()
    {
        return view('livewire.create-post');
    }

    public function save(){
        $validated = $this->validate([
            'title' => 'required|max:255',
            // 'urlSlug' => 'required|unique:posts',
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

        $user = Auth::user();

        $this->createdBy = $user->name;
        $this->createdByEmail = $user->email;
        $validated['urlSlug'] = $this->urlSlug;
        $validated['createdBy'] = $this->createdBy;
        $validated['createdByEmail'] = $this->createdByEmail;

        
        Post::create($validated);
        // $this->reset();
        session()->flash('success','Post have been created sucessfully');
        return $this->redirect('/posts',navigate:true);
    }
}
