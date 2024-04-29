<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditUserProfile extends Component
{

    public $name;
    public $email;
    public $gender;
    public $dob;

    public function mount(){

        $user = Auth::user();
        if ($user) {
            // $this->userProf = User::where('email', $user->email)->firstOrFail();
            $this->name = $user->name;
            $this->email = $user->email;
            $this->gender = $user->gender;
            $this->dob = $user->dob;
        } 
    }

    public function updateProfile(){
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255' . Auth::id(),
            'gender' => 'required',
            'dob' => 'required|date'
        ]);

        $user = Auth::user();
        $user->update($validated);

        session()->flash('success','User have been updated sucessfully');
        return $this->redirect('/user',navigate:true);
    }


    public function render()
    {
        return view('livewire.profile.edit-user-profile');
    }
}
