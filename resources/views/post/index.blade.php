@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    @livewire('CreatePost')
    
    <h1>Blog List</h1>
    @livewire('ShowPosts')
@endsection