@extends('layouts.app')

@section('content')
<div class="container my-40 mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words gb-white border border-2 shadow-md mt-20 text-center py-5">
                <div class="bg-gray-300 text-gray-700 uppercase p-6 mb-0">
                    {{ __('Dashboard') }}
                </div>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
            </div>
        </div>
    </div>
</div>
@endsection
