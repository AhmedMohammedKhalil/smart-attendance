@if (count($department->professors) > 0)
    <section class="related-product-area ptb-70">
        <div class="container">
            <div class="section-title">
                <h2>اعضاء هيئة التدريس</h2>
                <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
            </div>
            <div class="row">
                @foreach ($department->professors as $p)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-shop">
                            <div class="shop-img">
                                @if ($p->photo == null)
                                    @if ($p->gender == 'ذكر')
                                        <img src="{{ asset('img/professors/male.jpg') }}" alt="Image">
                                    @else
                                        <img src="{{ asset('img/professors/female.jpg') }}" alt="Image">
                                    @endif
                                @else
                                    <img src="{{ asset('img/professors/' . $p->id . '/' . $p->photo) }}" alt="Image">
                                @endif
                            </div>
                            <h3>{{ $p->name }}</h3>
                            <span>{{ $p->email }}</span>
                            <span> عدد المواد : {{ $p->acceptedsubjects->count() }}</span>
                            <a href="{{ route('all.depaertments.department.professor', ['id' => $p->id]) }}"
                                class="default-btn">
                                عرض الدكتور
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endif

@if (count($department->acceptedSubjects) > 0)
    <section class="related-product-area ptb-70">
        <div class="container">
            <div class="section-title">
                <h2>المواد</h2>
                <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
            </div>
            <div class="row">
                @foreach ($department->acceptedSubjects as $s)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-shop">
                            <div class="shop-img">
                                <img src="{{ asset('img/course-img/course-img-' . rand(1, 6) . '.jpg') }}"
                                    alt="Image">
                            </div>
                            <h3>{{ $s->name }}</h3>
                            <p>{{ $s->professor->name }}</p>
                            <a href="{{ route('all.depaertments.department.subject', ['id' => $s->id]) }}"
                                class="default-btn">
                                عرض المادة
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endif
