@extends('layouts.app')

@section('content')
<div class="container my-40 mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words gb-white border border-2 shadow-md mt20">
                <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                    {{ __('Reset Password') }}
                    @if (session('status'))
                        <div class="bg-gray-300 text-gray-700" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <form method="POST" action="{{ route('password.email') }}" class="py-5 px-5" novalidate>
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm my-2">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="p-3 bg-gray-100 rounded form-imput w-full @error('email') border border-red-500 @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                        @error('email')
                            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap my-2">
                        <button type="submit" class="bg-green-500 text-gray-100 font-bold hover:gb-green-700 w-full p-3 my-1 focus:outline-none focus:shadow-outline uppercase">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
