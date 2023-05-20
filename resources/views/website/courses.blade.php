@extends('website.layouts.banner')
@section('title')
Our <span>Courses</span>
@endsection
@section('content')


     <!-- Courses Start -->
     <div class="section section-padding">
        <div class="container">

            <!-- Courses Category Wrapper End  -->

            <!-- Courses Wrapper Start  -->
            <div class="courses-wrapper-02">
                <div class="row">
                    @foreach ($courses as $course )
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Courses Start -->
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="{{route('user.welcome.singleCourse',$course->id)}}"><img src="{{uploadImage($course->image)}}" alt="Courses"></a>
                                <div class="courses-option dropdown">
                                    <button class="option-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="icofont-share-alt"></i> Share</a></li>
                                        <li><a href="#"><i class="icofont-plus"></i> Create Collection</a></li>
                                        <li><a href="#"><i class="icofont-star"></i> Favorite</a></li>
                                        <li><a href="#"><i class="icofont-archive"></i> Archive</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="courses-content">
                                <div class="courses-author">

                                    <div class="tag">
                                        <a href="#" style="width: 112%;">{{$course->subject->name}}</a>
                                    </div>
                                </div>

                                <h4 class="title"><a href="{{route('user.welcome.singleCourse',$course->id)}}">{{$course->title}}</a></h4>

                                <div class="courses-price-review">
                                    <div class="courses-price">
                                        @if ($course->discoun_value ==0)
                                        <span class="sale-parice">${{$course->price}}</span>
                                        @else
                                            <span class="sale-parice">${{$course->discoun_value}}</span>
                                            <span class="old-parice">${{$course->price}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Courses End -->
                    </div>
                    @endforeach


                </div>
            </div>
            <!-- Courses Wrapper End  -->

        </div>
        {{$courses->links()}}
    </div>
    <!-- Courses End -->


@endsection
