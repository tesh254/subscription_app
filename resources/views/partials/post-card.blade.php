<article class="post-card card">
    {{-- Image --}}
    <a href="/{{ $post->slug }}" class="image-container"
        style="background-image: url('{{$post->image}}')"></a>

    {{-- Content --}}
    <div class="card-content">
        {{-- title --}}
    <h2 class="header-title title is-5"><a href="/{{$post->slug}}">{{$post->title}}</a></h2>
        {{-- byline --}}
        <div class="byline">{{$post->author->name}}</div>

        {{-- excerpt --}}
        <p>{{$post->getExcerpt()}}</p>
        {{-- free or premium? --}}
        <span class="price tag is-light {{$post->premium ? 'is-success' : 'is-warning'}}">
            {{$post->premium ? 'Premium' : 'Free'}}
        </span>
    </div>
</article>