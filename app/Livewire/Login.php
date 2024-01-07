<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;

use Livewire\Component;

#[\Livewire\Attributes\Layout('layouts.guest')]

class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.login');
    }
}
