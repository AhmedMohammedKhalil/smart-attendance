@extends('layouts.app')
@section('content')
    <div>{{ $page_name }}</div>
    <div>
        @include('users.menu')
        @yield('section')
    </div>
@endsection
