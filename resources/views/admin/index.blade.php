@extends('admin.layout')

@section('content')
<a class="btn btn-success" href="{{ route('admin.user') }}"> Users</a><br>
<a class="btn btn-success" href="{{ route('admin.product') }}"> Products</a>

@endsection
