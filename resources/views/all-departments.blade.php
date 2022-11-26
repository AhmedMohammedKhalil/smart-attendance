@extends('layouts.app')
@section('main')
    <div class="page-title-area bg-10" style="margin-top: 100px">
        <div class="container">
            <div class="page-title-content">
                <h2>جميع الأقسام</h2>
            </div>
        </div>
    </div>
    <section class="categories-area ptb-100" style="padding-bottom:150px">
        <div class="container">
            <div class="row">
                @foreach ($departments as $d)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-categories">
                            <img src="{{ asset('img/categories-img/categories-img-' . rand(1, 6) . '.jpg') }}"
                                alt="Image">
                            <div class="categories-content-wrap">
                                <div class="categories-content">
                                    <a href="{{ route('all.depaertments.department', ['id' => $d->id]) }}">
                                        <h3>{{ $d->name }}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if (count($departments) == 0)
                    <h3>لا يوجد اقسام</h3>
                @endif
            </div>
        </div>
    </section>
@endsection
