@extends('layouts.app')

@section('content')
<div class="container my-40 mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words gb-white border border-2 shadow-md mt20">
                <div class="bg-gray-300 text-2xl text-gray-700 uppercase text-center py-3 px-6 my-2 text-center">
                    {{ __('Verify Your Email Address') }}</div>

                <div class="py-10 px-5">
                    @if (session('resent'))
                        <div class="bg-red-300 text-red-500 border border-2" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p class="text-center my-3">{{ __('If you did not receive the email') }}</p>
                    <form class="d-my-5" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="bg-green-500 text-gray-100 font-bold hover:gb-green-700 w-full p-3 my-1 focus:outline-none focus:shadow-outline uppercase">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
