@extends('layouts.app')

@section('content')

<div class="container">
    <article class="post-single">
        {{-- image --}}
        <figure class="image is-text-centered has-image-centered">
            <img class="" src="{{ $post->image }}" alt="{{ $post->title}}">
        </figure>
        {{-- content --}}
        <div class="card-content">
            <header class="post-header">
                {{-- title --}}
                <h1 class="title is-2 header-title">
                    {{ $post->title }}
                </h1>

                {{-- byline --}}
                <div class="title is-4 header-title byline">
                    {{ $post->author->name }}
                </div>
            </header>

            {{-- TODO: show or hide if premium post --}}

            {{-- content --}}
            {!! $post->content !!}
        </div>

    </article>
</div>

@endsection