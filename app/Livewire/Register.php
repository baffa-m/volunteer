<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    #[Validate('required|string|max:255|email|unique:users,email')]
    public $email;

    #[Validate('required|string|min:6|confirmed')]
    public $password;
    public $password_confirmation;

    public function submitForm()
    {
        // Validate input fields
        $this->validate();

        // Create a new user with the provided credentials
        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => Hash::make($this->password),
        ]);

        // Automatically login the newly registered user
        Auth::login($user);

        // Redirect to the home page or any other desired location
        return redirect()->intended('/home');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
