@extends('professors.layout')
@section('section')
<div class="instructor-content">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="advisor-img">
                @if (auth('professor')->user()->photo == null)
                @if(auth('professor')->user()->gender == 'ذكر')
                <img src="{{ asset('img/professors/male.jpg') }}" alt="Image">
                @else
                <img src="{{ asset('img/professors/female.jpg') }}" alt="Image">
                @endif
                @else
                <img src="{{asset('img/professors/'.auth('professor')->user()->id.'/'.auth('professor')->user()->photo)}}"
                    alt="Image">
                @endif
            </div>
        </div>
        <div class="col-lg-8">
            <div class="advisor-content">
                <a href="#">
                    <h3>{{ auth('professor')->user()->name }}</h3>
                </a>
                <p>{{ auth('professor')->user()->email }}</p>
                <p>{{ auth('professor')->user()->department->name }}</p>
                <p>{{ auth('professor')->user()->phone }}</p>


            </div>
        </div>
    </div>
</div>
@endsection
