@extends('layouts.app')
@section('main')
    <div>{{ $page_name }}</div>
    <div>
        @include('admins.menu')
        @yield('section')
    </div>
@endsection
