@extends('layouts.app')
@push('css')
    <style>
        .teachers-content a {
            color: white
        }
    </style>
@endpush

@section('main')
    <section class="banner-area-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid social">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="banner-content">
                                <h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.3s">
                                    موقعنا لتسجيل الحضور والغياب
                                </h1>
                                {{-- <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.6s">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas architecto doloremque
                                    fugiat! Tempora, molestias minus mollitia optio laboriosam nulla, sed, numquam ad
                                    tempore
                                </p> --}}
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="banner-img wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                                <img src="{{ asset('img/banner-img/banner-img-2.png') }}" alt="Image" />
                                <div class="banner-shape-1">
                                    <img src="{{ asset('img/banner-img/shape-img-1.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-2">
                                    <img src="{{ asset('img/banner-img/shape-img-2.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-3">
                                    <img src="{{ asset('img/banner-img/shape-img-3.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-4">
                                    <img src="{{ asset('img/banner-img/shape-img-4.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-5 rotated">
                                    <img src="{{ asset('img/banner-img/shape-img-5.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-6">
                                    <img src="{{ asset('img/banner-img/shape-img-6.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-7 rotated">
                                    <img src="{{ asset('img/banner-img/shape-img-7.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-8">
                                    <img src="{{ asset('img/banner-img/shape-img-8.png') }}" alt="Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="teachers-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>اعضاء هيئة التدريس</h2>
                <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="{{ asset('img/teachers-img/teachers-img-1.jpg') }}" alt="Image" />
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="#">المزيد</a>
                                </li>
                            </ul>
                            <h3>دكتور عبدالله طلال</h3>
                            <span>الرياضيات</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="{{ asset('img/teachers-img/teachers-img-2.jpg') }}" alt="Image" />
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="#">المزيد</a>
                                </li>
                            </ul>
                            <h3>دكتور عبدالله طلال</h3>
                            <span>الرياضيات</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="{{ asset('img/teachers-img/teachers-img-3.jpg') }}" alt="Image" />
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="#">المزيد</a>
                                </li>
                            </ul>
                            <h3>دكتور عبدالله طلال</h3>
                            <span>الرياضيات</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="{{ asset('img/teachers-img/teachers-img-4.jpg') }}" alt="Image" />
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="#">المزيد</a>
                                </li>

                            </ul>
                            <h3>دكتور عبدالله طلال</h3>
                            <span>الرياضيات</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
