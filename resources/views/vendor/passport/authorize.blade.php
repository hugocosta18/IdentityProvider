<!-- resources/views/vendor/passport/authorize.blade.php -->

@extends('layouts.app', ['hideNavigation' => true])

@section('title', 'Authorization Request')

@section('content')
<div class="min-h-screen bg-gray-100 flex flex-col justify-center items-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-4">Authorization Request</h1>
        <p class="mb-4">{{ $client->name }} is requesting permission to access your account.</p>
        <div class="flex justify-between">
            <form method="post" action="{{ route('passport.authorizations.approve') }}">
                @csrf
                <input type="hidden" name="state" value="{{ $request->state }}">
                <input type="hidden" name="client_id" value="{{ $client->id }}">
                <input type="hidden" name="auth_token" value="{{ $authToken }}">
                <x-primary-button>Authorize</x-primary-button>
            </form>
            <form method="post" action="{{ route('passport.authorizations.deny') }}">
                @csrf
                @method('DELETE')
                <input type="hidden" name="state" value="{{ $request->state }}">
                <input type="hidden" name="client_id" value="{{ $client->id }}">
                <input type="hidden" name="auth_token" value="{{ $authToken }}">
                <x-secondary-button>Cancel</x-secondary-button>
            </form>
        </div>
    </div>
</div>
@endsection
