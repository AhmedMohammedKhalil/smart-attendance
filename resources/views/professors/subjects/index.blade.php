@extends('professors.layout')
@section('section')
 <div class="instructor-content">   
    <section class="cart-area">
    <div class="coupon-cart container">
        <div class="row">
            <div class="col-lg-4 col-sm-5 offset-lg-4 text-center">
                    <a href="{{ route('professor.subjects.create') }}" class="default-btn update mx-auto">
                        اضف مادة
                    </a>
            </div>
        </div>
    </div>

        <div class="container pt-5">
            <div class="row">
            @if (count($subjects)>0)
            @foreach ($subjects as $s )
                <div class="col-4">
                    <div class="single-course">
                    <a href="single-course.html">
                        <img src="{{ asset('img/course-img/course-img-'.rand(1,6).'.jpg') }}" alt="Image" />
                    </a>
                    <div class="course-content">
                        <ul class="lessons">
                            <li>{{$s->lectures->count()}} محاضرات </li>
                            <li class="float">{{$s->students->count()}}  طلاب</li>
                        </ul>
                        <hr>
                        <span class="tag text-dark">{{$s->name}}</span>
                        <span class="tag text-dark">{{$s->department->name}}</span>
                        <span class="tag text-dark">{{$s->approval}}</span>     
                        <hr>
                        <div class="row">
                            <div class="col-4 btn btn-outline">
                                        <a href="{{ route('professor.subjects.edit',['id'=>$s->id]) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                            </div>
                            <div class="col-4 btn">
                                
                                        <a href="{{ route('professor.subjects.edit',['id'=>$s->id]) }}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                            
                            </div>
                            @if ($s->lectures->count()>0 || $s->students->count()>0)

                            @else 
                            <div class="col-4 btn">
                                        <a href="{{ route('professor.subjects.delete',['id'=>$s->id]) }}">
                                                                            <i class="fa-sharp fa-solid fa-trash"></i>
                                        </a> 
                            </div>                          
                            @endif
                            
                         </div> 
                    </div>
                    </div>
                </div>   
            @endforeach
           @else
                <div>
                    <p >لا يوجد مواد</p>
                </div>
            @endif    
            </div>
        </div>
    </section>

</div>
@endsection





