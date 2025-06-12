<?php

namespace App\Livewire;

use Livewire\Component;

class DetailPost extends Component
{
    public function render()
    {
        return view('livewire.detail-post')->extends('layouts.app')->section('content');
    }
}
