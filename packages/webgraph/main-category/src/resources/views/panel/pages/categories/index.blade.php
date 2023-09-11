@extends('livewire.panel.app')
@section('')
    <h1>Showing all Categories</h1>

    @forelse ($categories as $category)
        <li>{{ $post->title }}</li>
    @empty
        <p> 'No Categories yet' </p>
    @endforelse
@endsection
