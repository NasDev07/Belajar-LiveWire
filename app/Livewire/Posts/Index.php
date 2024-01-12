<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]

#[\Livewire\Attributes\Lazy()]
class Index extends Component
{
    #[\Livewire\Attributes\On('postCreated')]

    public function updateList($post)
    {
    }

    public function placeholder()
    {
        return view('livewire.posts.placeholder');
    }

    public function render()
    {
        sleep(2);
        return view(
            'livewire.posts.index',
            [
                'posts' => Post::query()->with('user')->latest()->get(),
            ]
        );
    }
}
