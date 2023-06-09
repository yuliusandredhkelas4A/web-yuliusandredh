
@extends('layouts.main')

@section('container')

<h2 class="mb-5">Halaman Blog Posts</h2>
@foreach($posts as $post)
<article class="mb-5 border-bottom">
<h2>
    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
    <p>By <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</p></a>
<p>{{ $post->excerpt }}</p>
<a href="/posts/{{ $post->slug }}">Read More</a>
</article>
@endforeach

@endsection 

