@extends('app')
@section('content')
    <h1>Post Index</h1>
    {{-- @if (count($posts) > 0)
        <h2>We have post</h2>
        @foreach ($posts as $post)
            <h2>{{ $post->title }}</h2>
        @endforeach
    @endif --}}
    @forelse ($posts as $post)
        <x-post-card :post="$post" />
    @empty
        <p>No users</p>
    @endforelse
@endsection
