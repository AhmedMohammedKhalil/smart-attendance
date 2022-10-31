@extends('layouts.app')
@section('main')
    <div>{{ $page_name }}</div>
    <div>
        @include('students.menu')
        @yield('section')
    </div>
@endsection
