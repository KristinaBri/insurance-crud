
<style>
    body {
        font-family: 'Nunito', sans-serif;
        background-image: linear-gradient(0deg, transparent 0%, transparent 58%,rgba(104, 104, 104,0.05) 58%, rgba(104, 104, 104,0.05) 92%,transparent 92%, transparent 100%),linear-gradient(45deg, transparent 0%, transparent 34%,rgba(104, 104, 104,0.05) 34%, rgba(104, 104, 104,0.05) 77%,transparent 77%, transparent 100%),linear-gradient(0deg, transparent 0%, transparent 33%,rgba(104, 104, 104,0.05) 33%, rgba(104, 104, 104,0.05) 53%,transparent 53%, transparent 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));
    }
</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
