@extends('layouts.front')

@section("contente")

<div class="header-bg absolute top-0 left-0 right-0 -z-50 w-full h-[1100px] bg-gradient-to-b from-primary-light-950/15 to-transparent max-h-[1100px] overflow-hidden"></div>

<section class="relative py-12 lg:pt-32">
    <div class="container px-4">
      <div class="grid grid-cols-1 lg:grid-cols-2 items-start">
       

        <div class="mr-12 lg:pl-12">
          <span class="h-12 px-7 py-3.5 bg-neutral-0 dark:bg-neutral-dark-0 rounded-3xl border border-neutral-300 dark:border-neutral-dark-300 text-neutral-700 dark:text-neutral-dark-700 text-base font-bold leading-none mb-4 inline-block">
            Dahfifonsi
          </span>
          
          <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group mb-4">
              <label for="email" class="input-label">Email Adress</label>
             <input type="email" name="email" id="" class="input-lg">
            </div>
            <div class="form-group mb-4">
                <label for="email" class="input-label">Mots de passe</label>
                <input type="password" name="password" id="" class="input-lg">

              </div>
            <button type="submit" class="w-full btn bg-primary-light-950 dark:bg-primary-dark-950 rounded-full px-8 py-4 text-xl text-neutral-950 dark:text-neutral-dark-950 font-bold text-center">Submite</button>
        </form>
        </div>

      </div>
    </div>
  </section>
  
@endsection















{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

