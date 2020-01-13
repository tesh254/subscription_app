@extends('layouts.app')

@section('content')

<section class="hero is-medium is-primary is-light is-bold">
  <div class="hero-body hero-bg">
    <div class="container">
      <h1 class="title is-1 header-title">
        Daily dose of Fashion News Fast!! ⚡️
      </h1>
      <h1 class="title is-1 header-title">
          Only $15/month 
        </h1>
      <h2 class="subtitle header-title">
        We promise you wont regret it
          <br/><br/>
      <a href="/subscribe" class="button is-large is-warning is-light">
          Subscribe
      </a>
      </h2>
    </div>
  </div>
</section>
<br>
<section class="post-content">
  <section class="content has-text-centered">
    <p class="latest header-title title is-2">
      Latest News
    </p>
  </section>
  {{-- Post section --}}

  <section class="columns is-mobile is-multiline">

    @foreach ($posts as $post)
      <section class="column is-full-mobile is-one-quarter-tablet
      is-one-quarter-desktop is-one-quarter-widescreen is-one-quarter-fullhd">
        @include('partials.post-card', ['post' => $post])
    </section>
    @endforeach

  </section>
</section>

@endsection