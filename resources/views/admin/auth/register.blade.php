@extends('admin.layouts.includes')

@section('title') Dreams Pos admin template @endsection

@section('materal')


<div class="login-userheading">
    <h3>Create an Account</h3>
    <h4>Continue where you left off</h4>
</div>


<form method="POST" action="{{ route('admin.register') }}">
    @csrf
    <!-- Name -->
    <div class="form-login">
        <x-input-label for="name" :value="__('Name')" />
        <div class="form-addons">
            <x-text-input id="name" class="block mt-1 w-full"
            type="text" name="name" :value="old('name')"  autofocus
            autocomplete="name" placeholder="Enter your full name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
    </div>



    <!-- Email Address -->
    <div class="form-login">
        <x-input-label for="email" :value="__('Email')" />
        <div class="form-addons">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  autocomplete="username" placeholder="Enter your email address" />
            <img src="{{ asset('assets/img/icons/mail.svg')}}" alt="img" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
    </div>


    <!-- Password -->
    <div class="form-login">
        <x-input-label for="password" :value="__('Password')" />
        <div class="pass-group">
            <input id="password" class="block mt-1 w-full pass-input" type="password" name="password"
             autocomplete="new-password" placeholder="Enter your password" >
             <span class="fas toggle-password fa-eye-slash"></span>
            </input>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
    </div>

    <!-- Confirm Password -->
    <div class="form-login">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <div class="pass-group">
            <input id="password_confirmation" class="block mt-1 w-full pass-input" type="password" name="password_confirmation"  autocomplete="new-password" placeholder="Enter your Confirm Password" />
            <span class="fas toggle-password fa-eye-slash"></span>
            </input>
        </div>
    </div>



    <div class="form-login">
        <x-primary-button class="ms-4 btn btn-login">
            {{ __('Sign Up') }}
        </x-primary-button>
    </div>

    </div>

</form>

<div class="signinform text-center">
    <h4>Already a user? <a href="{{ route('admin.login') }}" class="hover-a">Sign In</a></h4>
</div>


</div>
<div class="login-img">
    <img src="{{ asset('assets/img/login.jpg') }}" alt="img" />
</div>



@endsection
