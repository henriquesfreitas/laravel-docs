<div class="blog-post">
    <h2 class="blog-post-title">

        <a href="{{ action('PostController@show', ['post'=> $post->id]) }}">{{ $post->title }}</a>

    </h2>
    <p class="blog-post-meta">
        {{ $post->user->name }} on
        {{ $post->created_at->toFormattedDateString() }}
    </p>
{{-- verificar lib carbon para data e hora--}}
    {{ $post->body }}

</div><!-- /.blog-post -->