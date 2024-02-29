<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;

    #[Validate('required|min:6')]
    public $password;

    public function submitForm()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        $this->validate();

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/home'); // Redirect to intended URL after successful login
        } else {
            // Authentication failed
            $this->addError('email', 'Invalid credentials. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
