<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]
class Index extends Component
{
    #[\Livewire\Attributes\On('postCreated')]

    public function updateList($post)
    {
    }

    public function render()
    {
        return view(
            'livewire.posts.index',
            [
                'posts' => Post::query()->with('user')->latest()->get(),
            ]
        );
    }
}
