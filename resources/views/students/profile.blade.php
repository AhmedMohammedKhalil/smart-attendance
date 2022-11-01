@extends('students.layout')
@section('section')
<div class="instructor-content">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="advisor-img">
                @if (auth('student')->user()->photo == null)
                @if(auth('student')->user()->gender == 'ذكر')
                <img src="{{ asset('img/students/male.jpg') }}" alt="Image">
                @else
                <img src="{{ asset('img/students/female.jpg') }}" alt="Image">
                @endif
                @else
                <img src="{{asset('img/students/'.auth('student')->user()->id.'/'.auth('student')->user()->photo)}}"
                    alt="Image">
                @endif
            </div>
        </div>
        <div class="col-lg-8">
            <div class="advisor-content">
                <a href="#">
                    <h3>{{ auth('student')->user()->name }}</h3>
                </a>
                <p>{{ auth('student')->user()->email }}</p>
                <p>{{ auth('student')->user()->department->name }}</p>
                <p>{{ auth('student')->user()->phone }}</p>


            </div>
        </div>
    </div>
</div>
@endsection
