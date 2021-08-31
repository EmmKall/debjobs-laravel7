@extends('layouts.app')

@section('content')
<div class="container my-30 mx-auto max-w-screen-md">
    <div class="flex flex-wrap justify-center">
        <div class="md:w-1/2 order-2 md:order-1 my-10">
            <div class="w-full max-w-md">
                <div class="flex flex-col break-words gb-white border border-2 shadow-md mt20">
                    <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                        {{ __('Register') }}
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="py-10 px-5" novalidate>
                        @csrf

                        <div class="flex flex-wrap my-2">
                            <label for="name" class="block text-gray-700 text-sm my-2">{{ __('Name') }}</label>

                            <input id="name" type="text" class="p-3 bg-gray-100 rounded form-imput w-full @error('name') border border-red-500 @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap my-2">
                            <label for="email" class="block text-gray-700 text-sm my-2">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="p-3 bg-gray-100 rounded form-imput w-full @error('email') border border-red-500 @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                            @error('email')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap my-2">
                            <label for="password" class="block text-gray-700 text-sm my-2">{{ __('Password') }}</label>
                            <input id="password" type="password" class="p-3 bg-gray-100 rounded form-imput w-full @error('password') border border-red-500 @enderror" name="password" autocomplete="new-password">

                            @error('password')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap my-2">
                            <label for="password-confirm" class="block text-gray-700 text-sm my-2">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="p-3 bg-gray-100 rounded form-imput w-full" name="password_confirmation"  autocomplete="new-password">
                        </div>

                        <div class="flex flex-wrap my-2">
                            <button type="submit" class="bg-green-500 text-gray-100 font-bold hover:gb-green-700 w-full p-3 my-1 focus:outline-none focus:shadow-outline uppercase">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="md:w-1/2 order-1 md:order-2 my-10 flex flex-col justify-center text-center px-10">
            <h1 class="text-green-500 text-3xl">¿Eres reclutador?</h1>
            <p class="text-xl mt-5 leading-5">Crea una cuenta totalmente gratis y comienza a publicar hasta 10 vacantes</p>
        </div>
    </div>
</div>
@endsection
