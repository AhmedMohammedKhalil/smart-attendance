@extends('layouts.app')
@section('main')
    <div class="page-title-area bg-10" style="margin-top: 100px">
        <div class="container">
            <div class="page-title-content">
                <h2>جميع المواد</h2>
            </div>
        </div>
    </div>
    <section class="related-product-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach ($subjects as $s)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-shop">
                            <div class="shop-img">
                                <img src="{{ asset('img/course-img/course-img-' . rand(1, 6) . '.jpg') }}" alt="Image">
                            </div>
                            <h3>{{ $s->name }}</h3>
                            <span>{{ $s->department->name }}</span>
                            <a href="{{ route('all.subjects.subject', ['id' => $s->id]) }}" class="default-btn">
                                عرض
                            </a>
                        </div>
                    </div>
                @endforeach
                @if (count($subjects) == 0)
                    <h3>لا يوجد مواد</h3>
                @endif

            </div>
        </div>
    </section>
@endsection
