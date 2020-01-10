@extends('layouts.app')

@section('content')

<section class="flex-center forms">
    <form method="POST" action="/login">
        {!! csrf_field() !!}

        <h2 class="header-title title is-2">Log In</h2>
        <div class="field">
            <p class="control">
                <label for="Email" class="title is-4 header-title">Email</label>
                <input class="input" name="email" type="email" placeholder="Email">
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <p class="control">
                <label for="Password" class="title is-4 header-title">Password</label>
                <input class="input" name="password" type="password" placeholder="Password">
            </p>
        </div>
        <div class="field">
            <p class="control">
                <button type="submit" class="button is-warning header-title">
                    Log In
                </button>
            </p>
        </div>
    </form>
</section>

@endsection