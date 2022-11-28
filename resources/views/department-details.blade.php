@extends('layouts.app')
@section('main')
    <div class="page-title-area bg-10" style="margin-top: 100px">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $department->name }}</h2>
                <p>{{ $department->description }}</p>
            </div>
        </div>
    </div>

    @include('common.department', ['control' => false])
@endsection
