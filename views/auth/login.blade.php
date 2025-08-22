@extends('themes.WooDHosT::layouts.app')

@section('content')
<div class="login-box">
    <h2>{{ __('messages.login') }}</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="{{ __('messages.email') }}" required>
        <input type="password" name="password" placeholder="{{ __('messages.password') }}" required>
        <button type="submit" class="btn">{{ __('messages.sign_in') }}</button>
    </form>
</div>
@endsection
