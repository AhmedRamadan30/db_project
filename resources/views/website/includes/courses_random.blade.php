<div class="tab-pane fade active">

    <!-- All Courses Wrapper Start -->
    <div class="courses-wrapper">
        <div class="row">
            @foreach ($courses as $course )
                <div class="col-lg-4 col-md-6">
                    <!-- Single Courses Start -->
                    <div class="single-courses">
                        <div class="courses-images">
                            <a href="{{route('user.welcome.singleCourse',$course->id)}}"><img src="{{uploadImage($course->image)}}" alt="Courses"></a>
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
    <!-- All Courses Wrapper End -->

</div>
