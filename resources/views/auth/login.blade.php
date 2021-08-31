@extends('layouts.app')

@section('content')
<div class="container my-40 mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words gb-white border border-2 shadow-md mt20">
                <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                    {{ __('Login') }}
                </div>

                <form method="POST" action="{{ route('login') }}" class="py-10 px-5" novalidate>
                    @csrf

                    <div class="flex flex-wrap my-2">
                        <label for="email" class="block text-gray-700 text-sm my-2">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="p-3 bg-gray-100 rounded form-imput w-full  @error('email') border border-red-500 @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                        @error('email')
                            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap my-2">
                        <label for="password" class="block text-gray-700 text-sm my-2">{{ __('Password') }}</label>

                        <input id="password" type="password" class="p-3 bg-gray-100 rounded form-imput w-full @error('password') border border-red-500 @enderror" name="password" autocomplete="current-password">

                        @error('password')
                            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap my-2">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="mx-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="text-gray-700 text-sm my-3" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap my-2">
                        <button type="submit" class="bg-green-500 text-gray-100 font-bold hover:gb-green-700 w-full p-3 my-1 focus:outline-none focus:shadow-outline uppercase">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-gray-500 my-2 text-center w-full" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
