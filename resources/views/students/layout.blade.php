@extends('layouts.app')
@section('main')
<div class="page-title-area bg-18">
    <div class="container">
        <div class="page-title-content">
            <h2>{{ $page_name }}</h2>
        </div>
    </div>
</div>
<div class="left-sidebar-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                @include('students.menu')
            </div>
            <div class="col-lg-8">
                @yield('section')
            </div>
        </div>
    </div>
</div>
@endsection
