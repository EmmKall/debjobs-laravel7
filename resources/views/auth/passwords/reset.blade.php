@extends('layouts.app')

@section('content')
<div class="container my-40 mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words gb-white border border-2 shadow-md mt20">
                <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                    {{ __('Reset Password') }}
                </div>

                <form method="POST" action="{{ route('password.update') }}" class="p-5" novalidate>
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="flex flex-wrap my-2">
                        <label for="email" class="block text-gray-700 text-sm my-2">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="p-3 bg-gray-100 rounded form-imput w-full @error('email') border border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap my-2">
                        <label for="password" class="block text-gray-700 text-sm my-2">{{ __('Password') }}</label>

                        <input id="password" type="password" class="p-3 bg-gray-100 rounded form-imput w-full @error('password') border border-red-500 @enderror" name="password" autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap my-2">
                        <label for="password-confirm" class="block text-gray-700 text-sm my-2">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="p-3 bg-gray-100 rounded form-imput w-full" name="password_confirmation" autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap my-2">
                        <button type="submit" class="bg-green-500 text-gray-100 font-bold hover:gb-green-700 w-full p-3 my-1 focus:outline-none focus:shadow-outline uppercase">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
