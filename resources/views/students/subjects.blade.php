@extends('students.layout')
@section('section')
    <section class="related-product-area pb-100">
        <div class="container">
            <div class="row">
                @foreach (auth('student')->user()->subjects as $s)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-shop">
                            <div class="shop-img">
                                <img src="{{ asset('img/course-img/course-img-' . rand(1, 6) . '.jpg') }}" alt="Image">
                            </div>
                            <h3>{{ $s->name }}</h3>
                            <span>{{ $s->department->name }}</span>
                            <a href="{{ route('student.subjects.subject', ['id' => $s->id]) }}" class="default-btn">
                                عرض
                            </a>
                        </div>
                    </div>
                @endforeach
                @if (count(auth('student')->user()->subjects) == 0)
                    <h3>لا يوجد مواد</h3>
                @endif

            </div>
        </div>
    </section>
@endsection
