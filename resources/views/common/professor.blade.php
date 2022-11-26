<div class="product-details ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="product-details-image">
                    @if ($professor->photo == null)
                        @if ($professor->gender == 'ذكر')
                            <img src="{{ asset('img/professors/male.jpg') }}" alt="Image">
                        @else
                            <img src="{{ asset('img/professors/female.jpg') }}" alt="Image">
                        @endif
                    @else
                        <img src="{{ asset('img/professors/' . $professor->id . '/' . $professor->photo) }}" alt="Image">
                    @endif
                </div>
            </div>
            <div class="col-lg-8">
                <div class="product-details-desc">
                    <a href="#">
                        <h3>{{ $professor->name }}</h3>
                    </a>
                    <p>{{ $professor->email }}</p>
                    <p>{{ $professor->department->name }}</p>
                    <p>{{ $professor->phone }}</p>


                </div>
            </div>
        </div>
    </div>
</div>
@if (count($professor->acceptedSubjects) > 0)
    <section class="related-product-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>المواد</h2>
                <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
            </div>
            <div class="row">
                @foreach ($professor->acceptedSubjects as $s)
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

            </div>
        </div>
    </section>
@endif
