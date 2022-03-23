@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-md-12">
        <article>
            <h2>{{ $post['title'] }}</h2>
            <h5>{{ $post['author'] }}</h5>
            <em>{{ $post['keywords'] }}</em>
            <p>{{ $post['content'] }}</p>
        </article>
        <a href="/blog" class="btn btn-secondary">Back to posts</a>
    </div>
</div>
@endsection