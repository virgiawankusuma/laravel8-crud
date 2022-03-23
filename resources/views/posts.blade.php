{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col-md-12">
        @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
            </h2>
            <h5>By:{{ $post['author'] }}</h5>
            <em>{{ $post['keywords'] }}</em>
            <p>{{ $post['content'] }}</p>
        </article>
        @endforeach
    </div>
</div>
@endsection