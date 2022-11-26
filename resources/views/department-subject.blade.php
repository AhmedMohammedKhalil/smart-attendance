@extends('layouts.app')
@section('main')
    <div class="page-title-area bg-10" style="margin-top: 100px">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $subject->name }}</h2>
            </div>
        </div>
    </div>
    @include('common.subject')
@endsection
