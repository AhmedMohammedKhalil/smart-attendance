<div class="product-details ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="product-details-image">
                    <img src="{{ asset('img/course-img/course-img-' . rand(1, 6) . '.jpg') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="product-details-desc">
                    <a href="#">
                        <h3>{{ $subject->name }}</h3>
                    </a>
                    <p>{{ $subject->professor->name }}</p>
                    <p>{{ $subject->department->name }}</p>
                    <p>{{ $subject->content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@auth('student')
    <div class="blog-column-three-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>المحاضرات</h2>
                <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
            </div>
            <div class="row">
                @foreach ($subject->students as $s)
                    @if (auth('student')->user()->id == $s->id)
                        @foreach ($lectures as $l)
                            @if ($l->status == 'متاح')
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-news">
                                        <a href="#">
                                            <img src="{{ $l->qr_url }}" alt="Image">
                                        </a>
                                        <div class="news-content">
                                            <span class="tag">{{ $s->professor }}</span>
                                            <a href="#">
                                                <h3>{{ $l->title }}</h3>
                                            </a>
                                            <p>{{ $l->created_at }}</p>
                                            @foreach ($l->attendance as $a)
                                                @if ($a->student_id != auth('student')->user()->id)
                                                    <livewire:student.record-attendance :lec_id="$l->id" />
                                                @else
                                                    <span>تم تسجيلك</span>
                                                @endif
                                            @endforeach
                                            @if (count($l->attendance) == 0)
                                                <livewire:student.record-attendance :lec_id="$l->id" />
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @else
                                <h3>لا يوجد محاضرة متاحة الان</h3>
                            @endif
                        @endforeach
                        @if (count($subject->lectures) == 0)
                            <h3>لا يوجد محاضرات للمادة</h3>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endauth

@auth('professor')
    @if ($subject->professor_id == @auth('professor')->user()->id)
        <section class="product-details-area pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab products-details-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <ul class="tabs">
                                        <li>
                                            <a href="#">
                                                المحاضرات
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                الطلاب
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="tab_content">
                                        <div class="tabs_item">
                                            <div class="products-details-tab-content">
                                                <div class="cart-wraps">
                                                    @if ($control == true)
                                                        <div class="coupon-cart">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-sm-5 offset-lg-4 text-center">
                                                                    <a href="{{ route('professor.lectures.create', ['id' => $subject->id]) }}"
                                                                        class="default-btn update mx-auto">
                                                                        اضف محاضرة
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="cart-table mt-4">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">الاسم</th>
                                                                    <th scope="col">الحالة</th>
                                                                    <th scope="col">التاريخ</th>
                                                                    <th scope="col">الاعدادات</th>
                                                                </tr>
                                                            </thead>
                                                            @if (count($subject->lectures) > 0)
                                                                <tbody>
                                                                    @foreach ($lectures as $l)
                                                                        <tr>
                                                                            <td class="product-name">
                                                                                <a href="#">{{ $l->title }}</a>
                                                                            </td>
                                                                            <td class="product-name">
                                                                                <a href="#">{{ $l->status }}</a>
                                                                            </td>
                                                                            <td class="product-name">
                                                                                <a href="#">{{ $l->created_at }}</a>
                                                                            </td>
                                                                            <td class="product-subtotal">
                                                                                <div class="row">
                                                                                    <div class="col-5">
                                                                                        <a href="{{ route('professor.lectures.showAttendance', ['id' => $l->id]) }}"
                                                                                            class="remove"> عرض الغياب
                                                                                        </a>
                                                                                    </div>
                                                                                    @if ($control == true)
                                                                                        @if ($l->status != 'متاح')
                                                                                            <div class="col-3">
                                                                                                <a href="{{ route('professor.lectures.delete', ['id' => $l->id]) }}"
                                                                                                    class="remove">حذف
                                                                                                </a>
                                                                                            </div>
                                                                                        @else
                                                                                            <div class="col-3">
                                                                                                <a href="{{ route('professor.lectures.edit', ['id' => $l->id]) }}"
                                                                                                    class="remove">تعديل
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <a href="{{ route('professor.lectures.close', ['id' => $l->id]) }}"
                                                                                                    class="remove"> غلق
                                                                                                </a>
                                                                                            </div>
                                                                                        @endif
                                                                                    @endif

                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            @else
                                                                <table>
                                                                    <tr aria-colspan="4">
                                                                        <p class="text-center">لا يوجد محاضرات</p>
                                                                    </tr>
                                                                </table>
                                                            @endif
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs_item">
                                            <div class="products-details-tab-content">
                                                <div class="cart-wraps">
                                                    @if ($control == true)
                                                        <div class="coupon-cart">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-sm-5 offset-lg-4 text-center">
                                                                    <a href="{{ route('professor.subjects.students.create', ['id' => $subject->id]) }}"
                                                                        class="default-btn update mx-auto">
                                                                        اضف طالب
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="cart-table mt-4">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">الاسم</th>
                                                                    <th scope="col">الايميل</th>
                                                                    <th scope="col">المستوى</th>
                                                                    <th scope="col">الموبايل</th>
                                                                    @if ($control == true)
                                                                        <th scope="col">الإعدادات</th>
                                                                    @endif
                                                                </tr>
                                                            </thead>
                                                            @if (count($subject->students) > 0)
                                                                <tbody>
                                                                    @foreach ($subject->students as $s)
                                                                        <tr>
                                                                            <td class="product-name">
                                                                                <a href="#">{{ $s->name }}</a>
                                                                            </td>
                                                                            <td class="product-name">
                                                                                <a href="#">{{ $s->email }}</a>
                                                                            </td>
                                                                            <td class="product-name">
                                                                                <a href="#">{{ $s->level }}</a>
                                                                            </td>
                                                                            <td class="product-name">
                                                                                <a href="#">{{ $s->phone }}</a>
                                                                            </td>
                                                                            @if ($control == true)
                                                                                <td class="product-subtotal">
                                                                                    <div class="row">

                                                                                        <div class="col-6">
                                                                                            <a href="{{ route('professor.subjects.students.delete', ['subject_id' => $subject->id, 'student_id' => $s->id]) }}"
                                                                                                class="remove">حذف
                                                                                            </a>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>
                                                                            @endif
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            @else
                                                                <table>
                                                                    <tr>
                                                                        <p class="text-center">لا يوجد طلاب</p>
                                                                    </tr>
                                                                </table>
                                                            @endif
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endauth
