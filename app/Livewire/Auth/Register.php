<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app')->section('content');
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed',
        ];
    }
    public function registerUser()
    {
        $rules = $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
        Auth::login($user, true);
        return redirect()->to(RouteServiceProvider::HOME);
    }
}
