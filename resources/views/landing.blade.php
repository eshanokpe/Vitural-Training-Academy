
@extends('layouts.header')

@section('content')
    <!--====== SLIDER PART START ======-->
    
    <section id="slider-part" class="slider-active ">
        <div class="single-slider bg_cover pt-150" style="background-image: url({{ asset('uassets/images/slider/s-1.jpg')}})" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="fadeInLeft" daStack(
								children: [
									
								]
							)ta-delay="1s">Choose the right theme for education</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Donec vitae sapien ut libearo venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt  Sed fringilla mauri amet nibh.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn" href="#">Get Started</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
           
        <div class="single-slider bg_cover pt-150" style="background-image: url({{ asset('uassets/images/slider/s-3.jpg')}})" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="fadeInLeft" data-delay="1s">Choose the right theme for education</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Donec vitae sapien ut libearo venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt  Sed fringilla mauri amet nibh.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn" href="#">Get Started</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover pt-150" style="background-image: url({{ asset('uassets/images/slider/s-2.jpg')}})" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="fadeInLeft" data-delay="1s">Choose the right theme for education</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Donec vitae sapien ut libearo venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt  Sed fringilla mauri amet nibh.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn" href="#">Get Started</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== CATEGORY PART START ======-->
    
    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-text pt-40">
                            <h2>Best platform to learn everything</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slide mt-40">
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="single-category text-center color-1">
                                        <span class="icon">
                                            <img src="{{ asset('uassets/images/all-icon/ctg-1.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Language</span>
                                        </span>
                                    </span> <!-- single category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="single-category text-center color-2">
                                        <span class="icon">
                                            <img src="{{ asset('uassets/images/all-icon/ctg-2.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Business</span>
                                        </span>
                                    </span> <!-- single category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="single-category text-center color-3">
                                        <span class="icon">
                                            <img src="{{ asset('uassets/images/all-icon/ctg-3.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Literature</span>
                                        </span>
                                    </span> <!-- single category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="single-category text-center color-1">
                                        <span class="icon">
                                            <img src="{{ asset('uassets/images/all-icon/ctg-1.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Language</span>
                                        </span>
                                    </span> <!-- single category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="single-category text-center color-2">
                                        <span class="icon">
                                            <img src="{{ asset('uassets/images/all-icon/ctg-2.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Business</span>
                                        </span>
                                    </span> <!-- single category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="single-category text-center color-3">
                                        <span class="icon">
                                            <img src="{{ asset('uassets/images/all-icon/ctg-3.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Literature</span>
                                        </span>
                                    </span> <!-- single category -->
                                </a>
                            </div>
                        </div> <!-- category slide -->
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>
    
    <!--====== CATEGORY PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to Hair Kulture Academy </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris</p>
                        <a href="#" class="main-btn mt-55">Learn More</a>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Upcoming events</h3>
                        </div> <!-- event title -->
                        <ul>
                            <li>
                                <div class="single-event">
                                    <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                    <a href="events-single.html"><h4>Campus clean workshop</h4></a>
                                    <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                    <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                </div>
                            </li>
                            <li>
                                <div class="single-event">
                                    <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                    <a href="events-single.html"><h4>Tech Summit</h4></a>
                                    <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                    <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                </div>
                            </li>
                            <li>
                                <div class="single-event">
                                    <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                    <a href="events-single.html"><h4>Environment conference</h4></a>
                                    <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                    <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                </div>
                            </li>
                        </ul> 
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="{{ asset('uassets/images/about/bg-1.png')}}" alt="About">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
   
    
    <!--====== APPLY PART ENDS ======-->
   
    <!--====== COURSE PART START ======-->
    
    <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our course</h5>
                        <h2> courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slide mt-30">
				@foreach ($courses as $course)
					<div class="col-lg-4">
						<div class="single-course">
							<div class="thum">
								<div class="image">
									<img src="{{ asset('assets/' .$course->image_path) }}" alt="Course">
								</div>
								<div class="price">
									<span>{{ $course->discount}}%</span>
								</div>
							</div>
							<div class="cont">
								<ul>
									<li><h4>₦{{$course->new_price}}</h4></li>
								</ul>
								<span style="text-decoration: line-through;">₦{{$course->sale_price}}</span><br>
								<a href="courses-single.html"><h4>{{$course->title}}</h4></a>
								
							</div>
						</div> <!-- single course -->
					</div>
				@endforeach
            </div> <!-- course slide -->
        </div> <!-- container -->
    </section>
    
    <!--====== COURSE PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
@endsection
   