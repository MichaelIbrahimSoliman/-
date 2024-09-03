@extends('admin.layouts.includes')

@section('title') Dreams Pos admin template @endsection

@section('materal')



<div class="login-userheading">
    <h3>Sign In</h3>
    <h4>Please login to your account</h4>
</div>
<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <div class="form-login">
        <label>Email</label>
        <div class="form-addons">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email address" />
            <img src="{{ asset('assets/img/icons/mail.svg')}}" alt="img">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
    </div>
    <div class="form-login">
        <label>Password</label>
        <div class="pass-group">

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" />
            <span class="fas toggle-password fa-eye-slash"></span>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
    </div>
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
        </label>
    </div>
    <div class="form-login">
        <div class="alreadyuser">
            @if (Route::has('admin.password.request'))
            <h4><a href="{{ route('admin.password.request') }}" class="hover-a">
                    Forgot Password?</a></h4>
            @endif
        </div>
    </div>
    <div class="form-login">
        <button class="btn btn-login" type="submit">Sign In</button>
    </div>
</form>
<div class="signinform text-center">
    <h4>Don’t have an account? <a href="{{ route('admin.register') }}" class="hover-a">Sign Up</a></h4>
</div>


@endsection
