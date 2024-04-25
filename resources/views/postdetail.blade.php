@extends('app')
@section('title', $post->title)
@section('content')

<div class="container mt-4" style="min-height: 600px;">
    @if($post->image)
    <div class="">
        <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid mt-3 mb-3" style="height: 300px; object-fit: cover;">
    </div>
    @endif
    <div >
        <h2>{{ $post->title }}</h2>
        <p class="post-meta text-right">Posted on {{ $post->created_at->format('F d, Y') }}</p>
    </div>
    <div class="post-content">
        {!! $post->content !!}
    </div>
</div>

@endsection


