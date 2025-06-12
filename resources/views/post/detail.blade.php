@extends('layouts.app')

@section('content')
    <a href="/posts" wire:navigation class="flex hover:underline">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <p>{!! nl2br(e($post->content)) !!}</p>
@endsection