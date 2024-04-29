<?php
use App\Livewire\CreatePost;
use App\Livewire\Posts;
use App\Livewire\ViewPost;
use App\Livewire\EditPost;
use App\Livewire\Register;
use App\Livewire\Login;
use App\Livewire\Homepage;
use App\Livewire\Profile\UserProfile;
use App\Livewire\Profile\EditUserProfile;
use Illuminate\Support\Facades\Route;


Route::get('/test', function () {
    return view('/welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('/posts/create',CreatePost::class);
    Route::get('/posts',Posts::class);
    Route::get('/posts/{urlslug}',ViewPost::class);
    Route::get('/posts/edit/{post}',EditPost::class);

    Route::get('/user',UserProfile::class);
    Route::get('/user/edit',EditUserProfile::class);
});

// Route::get('/posts/{urlslug}',ViewPost::class);
Route::get('/posts/{urlslug}',ViewPost::class);
Route::get('/',Homepage::class);
Route::get('/register',Register::class);
Route::get('/login',Login::class);


