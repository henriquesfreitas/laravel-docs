@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
    <div class="blog-post">
    <h2 class="blog-post-title">

       {{ $post->title }}

    </h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>
    {{-- verificar lib carbon para data e hora--}}
    {{ $post->body }}

    </div><!-- /.blog-post -->
    </div>
@endsection