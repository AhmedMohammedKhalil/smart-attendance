@extends('layouts.app')
@section('main')
    <div>{{ $page_name }}</div>
    <div>
        @include('professors.menu')
        @yield('section')
    </div>
@endsection
