<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $gender;

    public $dob;


    public function render()
    {
        return view('livewire.register');
    }

    public function storeUser(){
        $validated=$this->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|min:8|max:255',
            'gender'=>'required',
            'dob'=>'required|date'
        ]);

    $user=User::create([
        'name'=>$this->name,
        'email'=>$this->email,
        'password'=>bcrypt($this->password),
        'gender'=>$this->gender,
        'dob'=>$this->dob
    ]);

    Auth::login($user);
    session()->flash('success','Registration succesful');
    return $this->redirect('/posts',navigate:true);

    }
}
