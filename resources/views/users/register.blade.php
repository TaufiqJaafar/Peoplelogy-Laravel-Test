@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form class="form bg-white p-6 border-1" method="POST" action="{{ route('auth.store') }}">
        @csrf
        <div>
            <label class="text-sm" for="firstname">First Name</label>
            <input class="text-lg border-1" type="text" id="firstname" value="{{ old('firstname') }}" name="firstname">
            @error('firstname')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label class="text-sm" for="lastname">Last Name</label>
            <input class="text-lg border-1" type="text" id="lastname" value="{{ old('lastname') }}" name="lastname">
            @error('lastname')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label class="text-sm" for="email">Email</label>
            <input class="text-lg border-1" type="text" id="email" value="{{ old('email') }}" name="email">
            @error('email')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label class="text-sm" for="password">Password</label>
            <input class="text-lg border-1" type="text" id="password" value="{{ old('password') }}" name="password">
            @error('password')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <button class="border-1" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
