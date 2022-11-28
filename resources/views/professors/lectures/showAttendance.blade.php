@extends('professors.layout')
@section('section')
    <section class="product-details-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="tab products-details-tab mt-0">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li>
                                        <a href="#">
                                            الطلاب الحاضرين
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            الطلاب الغائبين
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <div class="cart-wraps">
                                                <div class="cart-table mt-4">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">الاسم</th>
                                                                <th scope="col">المستوى</th>
                                                                <th scope="col">وقت الحضور</th>
                                                            </tr>
                                                        </thead>
                                                        @if (count($student_attended) > 0)
                                                            <tbody>
                                                                @foreach ($student_attended as $s)
                                                                    <tr>
                                                                        <td class="product-name">
                                                                            <a href="#">{{ $s->name }}</a>
                                                                        </td>
                                                                        <td class="product-name">
                                                                            <a href="#">{{ $s->level }}</a>
                                                                        </td>
                                                                        <td class="product-name">
                                                                            <a
                                                                                href="#">{{ $s->attendance->entrance_time }}</a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        @else
                                                            <table>
                                                                <tr aria-colspan="4">
                                                                    <p class="text-center">لا يوجد طلاب حاضرين</p>
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
                                                <div class="cart-table mt-4">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">الاسم</th>
                                                                <th scope="col">المستوى</th>
                                                            </tr>
                                                        </thead>
                                                        @if (count($student_absences) > 0)
                                                            <tbody>
                                                                @foreach ($student_absences as $s)
                                                                    <tr>
                                                                        <td class="product-name">
                                                                            <a href="#">{{ $s->name }}</a>
                                                                        </td>
                                                                        <td class="product-name">
                                                                            <a href="#">{{ $s->level }}</a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        @else
                                                            <table>
                                                                <tr>
                                                                    <p class="text-center">لا يوجد طلاب غائبين</p>
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
@endsection
