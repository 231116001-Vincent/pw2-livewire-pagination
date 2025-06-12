<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;

class CreatePost extends Component
{
    #[Validate('required')]
    public $title = "";

    #[Validate('required')]
    public $content = "";
    
    public function formSubmit()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'excerpt' => Str::of($this->content)->limit(100)
        ]);

        session()->flash('status', 'Create Post Success!');

        return $this->redirect('/post');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
