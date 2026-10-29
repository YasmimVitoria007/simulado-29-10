<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    
    public function login(){

        $this->validate();

        if(Auth::attempt([
            'email' => $this ->email,
            'password' => $this ->password,
        
        ])){
            session()->regenerate();
            return redirect()->route('produto.create');
        }

        session()->flash('error', 'Email ou senha incorretos');

    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
