<section>
    <section class="main-contact-area ptb-100" style="padding-bottom: 150px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-wrap contact-pages mb-0">
                        <div class="contact-form">
                            <form id="contactForm" form wire:submit.prevent='makeSearch'>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <label>ابحث هنا</label>
                                            <input class="form-control" type="text" name="search"
                                                wire:model.lazy='search' id="search" />
                                            @error('search')
                                                <span class="text-danger error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <button type="submit" class="default-btn">
                                            بحث
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($departments != '')
        @if (count($departments) != 0)
            <section class="categories-area ptb-100" style="padding-bottom:150px">
                <div class="container">
                    <div class="section-title">
                        <h2>الأقسام</h2>
                        <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
                    </div>
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
        @endif
    @endif
    @if ($professors != '')
        @if (count($professors) != 0)
            <section class="related-product-area ptb-70">
                <div class="container">
                    <div class="section-title">
                        <h2>اعضاء هيئة التدريس</h2>
                        <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
                    </div>
                    <div class="row">
                        @foreach ($professors as $p)
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
                                            <img src="{{ asset('img/professors/' . $p->id . '/' . $p->photo) }}"
                                                alt="Image">
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
    @endif
    @if ($subjects != '')
        @if (count($subjects) != 0)
            <section class="related-product-area ptb-100">
                <div class="container">
                    <div class="section-title">
                        <h2>المواد</h2>
                        <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
                    </div>
                    <div class="row">
                        @foreach ($subjects as $s)
                            @if ($s->approval == 'موافقة')
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-shop">
                                        <div class="shop-img">
                                            <img src="{{ asset('img/course-img/course-img-' . rand(1, 6) . '.jpg') }}"
                                                alt="Image">
                                        </div>
                                        <h3>{{ $s->name }}</h3>
                                        <span>{{ $s->department->name }}</span>
                                        <a href="{{ route('all.subjects.subject', ['id' => $s->id]) }}"
                                            class="default-btn">
                                            عرض
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @if (count($subjects) == 0)
                            <h3>لا يوجد مواد</h3>
                        @endif

                    </div>
                </div>
            </section>
        @endif
    @endif
</section>
