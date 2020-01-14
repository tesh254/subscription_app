@extends('layouts.app')

@section('content')
<section class="container">
    <div class="card card-padded" style="margin: 15px; padding: 15px;">

        {{-- success message --}}
        @if (session('success'))
            <div class="notification is-success is-light">
                {{ session('success') }}
            </div>
        @endif
        
        {{-- subscription info --}}
        <div class="section-header">
            <h2 class="title is-2 header-title has-text-centered">Your Subscription</h2>
        </div>

        {{-- check if user is on their grace period --}}
        @if ($user->subscription('main')->onGracePeriod())
            <div class="notification is-danger is-light has-text-centered">
                You have cancelled your account.<br>
                You have access to Fnista until {{ $user->subscription('main')->ends_at->format('F d, Y') }}.
            </div>
        @endif

        @if ( ! $user->subscribed('main'))
            <div class="jumbotron text-center">
                <p>You don't have a subscription.</p>
                <a href="/subscribe" class="btn btn-success btn-lg"></a>
            </div>
        @else
            
            <div class="row">
                <div class="col-sm-6">

                    {{-- current plan --}}
                    <div class="has-text-centered">
                        <strong class="header-title">Current Plan:</strong> {{ ucfirst($user->subscription('main')->stripe_plan) }}
                    </div>

                </div>
                <div class="has-text-centered">
                    <div class="divider"></div>
                    {{-- update subscription form --}}
                    <h4 class="has-text-centered header-title title is-4">Update Subscription</h4>

                    <form action="/account/subscription" method="POST">
                        {!! csrf_field() !!} 

                        <div class="select">
                            <select name="plan" class="form-control">
                                <option value="bronze" 
                                    {{ ($user->onPlan('bronze')) ? 'selected' : '' }}>
                                    Bronze ($5/mo)
                                </option>
                                <option value="silver" 
                                    {{ ($user->onPlan('silver')) ? 'selected' : '' }}>
                                    Silver ($10/mo)
                                </option>
                                <option value="gold" 
                                    {{ ($user->onPlan('gold')) ? 'selected' : '' }}>
                                    Gold ($15/mo)
                                </option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="button is-medium is-warning">
                            {{ $user->subscription('main')->onGracePeriod() ? 'Reactivate' : 'Update Plan' }}
                        </button>
                    </form>

                </div>
            </div>
        @endif
        {{-- credit card section --}}
        <div class="has-text-centered">
            <br>
            <h2 class="header-title  title is-4">Update Card</h2>
        </div>

        <form action="/account/card" class="has-text-centered" method="POST" id="subscribe-form">
            {!! csrf_field() !!}

            <div class="form-group row">
                {{-- credit card number --}}
                <div class="field">
                    <label class="header-title title is-5">Credit Card Number</label>
                    <input type="text" class="input" placeholder="**** **** **** {{ $user->card_last_four }}" data-stripe="number">
                </div>

                {{-- cvc --}}
                <div class="field">
                    <label class="header-title title is-5">CVC</label>
                    <input type="text" class="input" placeholder="123" data-stripe="cvc">
                </div>
            </div>

            <div class="field-body">

                {{-- exp month --}}
                <div class="field">
                    <label class="header-title title is-5">Expiration Month</label>
                    <input type="text" class="input" placeholder="08" data-stripe="exp-month">
                </div>

                {{-- exp year --}}
                <div class="field">
                    <label class="header-title title is-5">Expiration Year</label>
                    <input type="text" class="input" placeholder="2020" data-stripe="exp-year">
                </div>
            </div>        

            <div class="stripe-errors"></div>
            <br>
            <br>
            <button type="submit" class="button is-black is-fullwidth header-title">Update Card</button>

        {{-- billing history --}}
        <div class="section-header">
            <br>
            <h2 class="header-title is-5 has-text-centered title is-4">Billing History</h2>
        </div>

        @if (count($invoices) > 0)
            <table class="table table-bordered table-striped table-hover has-text-centered">
                @foreach ($invoices as $invoice)
                    <tr>
                        <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                        <td>{{ $invoice->total() }}</td>
                        <td class="col-xs-2 ">
                            <a href="/account/invoices/{{ $invoice->id }}" class="btn btn-primary btn-sm">Download</a>
                        </td>
                    </tr>
                @endforeach 
            </table>
        @else
            <div class="jumbotron text-center">
                <p>No billing history</p>
            </div>
        @endif

        {{-- delete subscription --}}
        <form action="/account/subscription" method="POST" class="text-right">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="button is-warning is-fullwidth header-title">Cancel Subscription</button>
        </form>

    </div>
</section>
@endsection