<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DB Project</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

{{--    <link rel="shortcut icon" type="image/x-icon" href="{{website_assets('assets/images/favicon.ico')}}">--}}
    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/flaticon.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/icofont.min.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/font-awesome.min.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/apexcharts.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/jqvmap.min.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{website_assets('assets/css/style.css')}}">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <div class="main-wrapper">

        <!-- Login Header Start -->
        <div class="section login-header">
            <!-- Login Header Wrapper Start -->
            <div class="login-header-wrapper navbar navbar-expand">

                <!-- Header Logo Start -->
                <div class="login-header-logo logo-2">
                    <a href="{{ route('user.welcome.index') }}">DB Project</a></li>
                </div>
                <!-- Header Logo End -->

                <!-- Header Search Start -->
                {{-- <div class="login-header-search search-2 dropdown">
                    <button class="search-toggle" data-bs-toggle="dropdown"><i class="flaticon-loupe"></i></button>

                    <div class="search-input dropdown-menu">
                        <form action="#">
                            <input type="text" placeholder="Search here">
                        </form>
                    </div>

                </div> --}}
                <!-- Header Search End -->

                <!-- Header Action Start -->
                <div class="login-header-action action-2 ml-auto">

                    <div class="dropdown">
                        <button class="action more" data-bs-toggle="dropdown">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="" href="{{route('user.welcome.profile',Auth::user()->id)}}"><i class="icofont-user"></i> Profile</a></li>
                            {{-- <li><a class="" href="#"><i class="icofont-inbox"></i> Inbox</a></li> --}}
                            <li><a class="" href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icofont-logout"></i> Sign Out</a></li>
                            <form action="{{route('logout')}}" id="logout-form" method="POST" style="display: none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
                <!-- Header Action End -->

            </div>
            <!-- Login Header Wrapper End -->
        </div>
        <!-- Login Header End -->

        <!-- Courses Enroll Start -->
        <div class="section">

            <!-- Courses Enroll Wrapper Start -->
            <div class="courses-enroll-wrapper">

                <!-- Courses Video Player Start -->
                <div class="courses-video-player">

                    <!-- Courses Video Container Start -->
                    <div class="vidcontainer">
                        {!! $lecture->link !!}

                    </div>
                    <!-- Courses Video Container End -->

                    <!-- Courses Enroll Content Start -->
                    <div class="courses-enroll-content">

                        <!-- Courses Enroll Title Start -->
                        <div class="courses-enroll-title">
                            <h2 class="title">{{$lecture->title}}</h2>
                        </div>
                        <!-- Courses Enroll Title End -->

                        <!-- Courses Enroll Tab Start -->
                        <div class="courses-enroll-tab">
                            <div class="enroll-tab-menu">
                            </div>
                            {{-- <div class="enroll-share">
                                <a href="#"><i class="icofont-share-alt"></i> Share</a>
                            </div> --}}
                        </div>
                        <!-- Courses Enroll Tab End -->

                        <!-- Courses Enroll Tab Content Start -->
                        <div class="courses-enroll-tab-content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">

                                    <!-- Description Start -->
                                    <div class="description">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="enroll-tab-title">
                                                    <h3 class="title">Description</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="enroll-tab-content">
                                                    <p>{{ $lecture->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Description End -->

                                </div>
                            </div>
                        </div>
                        <!-- Courses Enroll Tab Content End -->

                    </div>
                    <!-- Courses Enroll Content End -->
                </div>
                <!-- Courses Video Player End -->

                <!-- Courses Video Playlist Start -->
                <div class="courses-video-playlist">
                    <div class="playlist-title">
                        <h3 class="title">Course Content</h3>
                        <span>{{ $lecture->course->lectures()->count()}} Lectures </span>
                    </div>

                    <!-- Video Playlist Start  -->
                    <div class="video-playlist">
                        <div class="accordion" id="videoPlaylist">

                            <!-- Accordion Items Start  -->
                            <div class="accordion-item">
                                <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <p>All Lectures</p>
                                </button>

                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#videoPlaylist">
                                    <nav class="vids">


                                        @forelse ($lecture->course->lectures as $key=> $lec)

                                            <a class="@if($lecture->id == $lec->id) active @endif" href="{{ route('user.welcome.lecture', $lec->id) }}">
                                                <p>{{$key.".".$lec->title }}</p>
                                                {{-- <span class="total-duration">08 minutes</span> --}}
                                            </a>
                                        @empty
                                        <a class="link" >
                                            <p>No Lectures Yet</p>
                                        </a>
                                        @endforelse
                                    </nav>
                                </div>
                            </div>
                            <!-- Accordion Items End  -->

                        </div>
                    </div>
                    <!-- Video Playlist End  -->

                </div>
                <!-- Courses Video Playlist End -->

            </div>
            <!-- Courses Enroll Wrapper End -->

        </div>
        <!-- Courses Enroll End -->


        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>


    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="{{website_assets('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{website_assets('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{website_assets('assets/js/plugins/popper.min.js')}}"></script>
    <script src="{{website_assets('assets/js/plugins/bootstrap.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{website_assets('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{website_assets('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{website_assets('assets/js/plugins/video-playlist.js')}}"></script>
    <script src="{{website_assets('assets/js/plugins/jquery.nice-select.min.js')}}"></script>
    <script src="{{website_assets('assets/js/plugins/ajax-contact.js')}}"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="{{website_assets('assets/js/plugins.min.js')}}"></script> -->


    <!-- Main JS -->
    <script src="{{website_assets('assets/js/main.js')}}"></script>

</body>

</html>
