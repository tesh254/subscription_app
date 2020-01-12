@extends('layouts.app')

@section('content')

<div class="flex-center forms">
    <form action="/subscribe" method="POST" id="subscribe-form">
        {!! csrf_field() !!}
        <h2 class="header-title title is-2">Subscribe</h2>
        @if (count($errors) > 0)
        <div class="notification is-danger is-light">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>                
            @endforeach
        </div>
        @endif
        {{-- only show then logged in --}}
            @if (Auth::guest())
            {{-- user info --}}
            <h3 class="header-title title is-3">User Info</h3>
            
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
            @endif

            {{-- subscription form --}}
            <h3 class="header-title title is-3">Subscription Info</h3>
            <div class="columns is-mobile is-multiline">

                <section class="column is-full-mobile is-one-quarter-tablet
                is-one-quarter-desktop is-one-quarter-widescreen is-one-quarter-fullhd">
                    <div class="subscription-option">
                        <input id="plan-bronze" type="radio" name="plan" value="bronze" checked>
                        <label for="plan-bronze">
                            <span class="plan-price header-title">
                                $5 <small>/mo</small>
                            </span>
                            <br>
                            <span class="plan-name header-title">Bronze</span>
                        </label>
                    </div>
                </section>

                <section class="column is-full-mobile is-one-quarter-tablet
                is-one-quarter-desktop is-one-quarter-widescreen is-one-quarter-fullhd">
                    <div class="subscription-option">
                        <input id="plan-silver" type="radio" name="plan" value="silver">
                        <label for="plan-silver">
                            <span class="plan-price header-title">
                                $10 <small>/mo</small>
                            </span>
                            <br>
                            <span class="plan-name header-title">Silver</span>
                        </label>
                    </div>
                </section>

                <section class="column is-full-mobile is-one-quarter-tablet
                is-one-quarter-desktop is-one-quarter-widescreen is-one-quarter-fullhd">
                    <div class="subscription-option">
                        <input id="plan-gold" type="radio" name="plan" value="gold">
                        <label for="plan-gold">
                            <span class="plan-price header-title">
                                $15 <small>/mo</small>
                            </span>
                            <br>
                            <span class="plan-name header-title">Gold</span>
                        </label>
                    </div>
                </section>
            </div>
            

            {{-- credit card info --}}
            <h3 class="header-title title is-3">Credit Card Info</h3>
            <div class="stripe-errors" style="margin: 15px;"></div>
            
            {{-- credit card number --}}
            <div class="field">
                <p class="control">
                    <label class="title is-4 header-title" for="credit-card-number">
                        Credit Card Number
                    </label>
                    <input type="text" class="input" placeholder="4242 4242 4242 4242" data-stripe="number" />
                </p>
            </div>
            {{-- cvc --}}
            <div class="field">
                <p class="control">
                    <label for="cvc" class="title is-4 header-title">
                        CVC
                    </label>
                    <input type="text" class="input" placeholder="123" data-stripe="cvc">
                </p>
            </div>

            <div class="is-fullwidth">
                <div class="field-body">
                    {{-- exp month --}}
                    <div class="field">
                        <p class="control is-expanded">
                            <label for="" class="header-title title is-4">Expiry Month</label>
                            <input type="text" class="input" placeholder="01" data-stripe="exp-month">
                        </p>
                    </div>
                    {{-- exp year --}}
                    <div class="field">
                        <p class="control is-expanded">
                            <label for="" class="header-title title is-4">Expiry Year</label>
                            <input type="text" placeholder="2023" class="input" data-stripe="exp-year">
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <p class="control">
                    <button class="button is-fullwidth is-warning header-title" type="submit">
                        Subscribe
                    </button>
                </p>
            </div>
    </form>
</div>

@endsection