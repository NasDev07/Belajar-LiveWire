<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{

    #[Rule(['required', 'string', 'min:3'])]
    public string $body = '';

    public function store()
    {

        $post = Auth::user()->posts()->create(
            $this->validate()
        );

        flash('post created successfully.', 'success');

        $this->reset();
        return $post;
    }
}
