@extends('admins.layout')

@section('section')
<section class="counter-area ebeef5-bg-color pt-100 pb-70">

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-1">
                        <img src="{{ asset('img/counter-shape/counter-shape-1.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $student_count }}">0</span>
                        </h2>
                    </div>
                    <p>الطلاب</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-2">
                        <img src="{{ asset('img/counter-shape/counter-shape-2.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $professor_count }}">0</span>
                        </h2>
                    </div>
                    <p>اعضاء هيئة التدربس</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-3">
                        <img src="{{ asset('img/counter-shape/counter-shape-3.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $subject_count }}">0</span>
                        </h2>
                    </div>
                    <p>المواد</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-4">
                        <img src="{{ asset('img/counter-shape/counter-shape-3.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $department_count }}">0</span>
                        </h2>
                    </div>
                    <p>الأقسام</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
