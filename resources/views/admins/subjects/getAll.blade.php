@extends('admins.layout')
@section('section')
<div class="instructor-content">
    
    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                        <div class="cart-wraps">
                            <div class="cart-table  mt-4">
                                <div class="section-title">
            <h2>المواد المضافة  حديثا</h2>
            <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
        </div>
                                <table class="table table-bordered mb-5">
                                    <thead>
                                        <tr>
                                            <th scope="col">اسم المادة</th>
                                            <th scope="col">اسم المدرس </th>
                                            <th scope="col">القسم</th>
                                            <th scope="col">المحتوي</th>
                                            <th scope="col">الموافقة</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($need_approval_subjects as $s )
                                        <tr>                                            
                                            <td class="product-name">
                                                <a href="#">{{$s->name}}</a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">{{$s->professor->name}}</a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">{{$s->department->name}}</a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">{{$s->content}}</a>
                                            </td>
                                            <td class="product-subtotal">
                                                <div class="row">
                                                <div class="col-6">
                                                    <a href="{{ route('admin.subjects.accept',['id'=>$s->id]) }}" class="btn btn-success text-white">
                                                        قبول
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="{{ route('admin.subjects.reject',['id'=>$s->id]) }}" class="btn btn-danger text-white">
                                                        رفض
                                                    </a>
                                                </div>
                                                </div>    
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>

                        <div class="cart-wraps">
                            <div class="cart-table  mt-4">
                                


<div class="section-title">
            <h2> جميع المواد</h2>
            <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
        </div>
                            <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">اسم المادة</th>
                                            <th scope="col">اسم المدرس </th>
                                            <th scope="col">القسم</th>
                                            <th scope="col">المحتوي</th>
                                            <th scope="col">الموافقة</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($all_subjects as $s )
                                        <tr>                                            
                                            <td class="product-name">
                                                <a href="#">{{$s->name}}</a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">{{$s->professor->name}}</a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">{{$s->department->name}}</a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">{{$s->content}}</a>
                                            </td>
                                            <td class="product-subtotal">
                                                <a href="#">{{$s->approval}}</a> 
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection




