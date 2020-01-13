@extends('layouts.app')

@section('content')

<section class="flex-center forms">
    <form action="/register" method="POST">
        {!! csrf_field() !!}

        <h2 class="header-title title is-2">Sign Up</h2>

<div class="field">
    <p class="control">
        <label for="Name" class="title is-4 header-title">Name</label>
      <input class="input" name="name" type="text" placeholder="Name"/>
    </p>
  </div>
<div class="field">
    <p class="control">
        <label for="Email" class="title is-4 header-title">Email</label>
      <input class="input" type="email" name="email" placeholder="Email">
    </p>
  </div>
  <div class="field">
    <p class="control">
        <label for="Password" class="title is-4 header-title">Password</label>
      <input class="input" type="password" name="password" placeholder="Password">
    </p>
  </div>
  <div class="field">
    <p class="control">
        <label for="Confirm Password" class="title is-4 header-title">Confirm Password</label>
      <input class="input" type="password" name="password_confirmation" placeholder="Confirm Password">
    </p>
  </div>
  <div class="field">
    <p class="control">
      <button type="submit" class="button is-warning header-title">
        Sign Up
      </button>
    </p>
  </div>
    </form>
</section>

@endsection