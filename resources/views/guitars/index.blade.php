@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <a style="button" href="{{ route('guitars.create') }}">ADD</a>
    @foreach ($guitars as $guitar)
        <div>
            <h3>
                <a href="{{ route('guitars.edit', ['guitar' => $guitar['id']]) }}">{{ $guitar['name'] }}</a>
            </h3>
            <form method="post" action="{{ route('guitars.destroy', ['guitar' => $guitar['id']]) }}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            <ul>
                <li>Made by: {{ $guitar['brand'] }}</li>
                <li>Year made: {{ $guitar['year_made'] }}</li>
            </ul>
        </div>
    @endforeach
</div>
@endsection
