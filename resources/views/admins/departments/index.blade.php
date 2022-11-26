@extends('admins.layout')
@section('section')
    <div class="instructor-content">

        <section class="cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="cart-wraps">
                            <div class="coupon-cart">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5 offset-lg-4 text-center">
                                        <a href="{{ route('admin.departments.create') }}" class="default-btn update mx-auto">
                                            اضف قسم
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-table table-responsive mt-4">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">القسم</th>
                                            <th scope="col">الوصف</th>
                                            <th scope="col">الاعدادات</th>

                                        </tr>
                                    </thead>
                                    @if (count($departments) > 0)
                                        <tbody>
                                            @foreach ($departments as $d)
                                                <tr>
                                                    <td class="product-name">
                                                        <a href="#">{{ $d->name }}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">{{ $d->description }}</a>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <a href="{{ route('admin.departments.edit', ['id' => $d->id]) }}"
                                                                    class="remove">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-6">
                                                                <a href="{{ route('admin.departments.delete', ['id' => $d->id]) }}"
                                                                    class="remove">
                                                                    <i class="bx bx-x"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                </table>
                            @else
                                <table>
                                    <tr>
                                        <div>
                                            <p>لا يوجد اقسام</p>
                                        </div>
                                    </tr>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
