<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination, WithoutUrlPagination;
    
    public function render()
    {
        return view('livewire.show-posts', ['data' => Post::cursorPaginate(5)]);
    }
}
