@extends('layouts.header')

@section('content')

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ asset('uassets/images/page-banner-1.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Our Courses</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

 <!--====== COURSES PART START ======-->
    
 <section id="courses-part" class="pt-120 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            
        </div> <!-- row -->
        <div class="tab-content" id="myTabContent"> 
          <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
            <div class="row justify-content-start">
                    @forelse ($courses as $course)
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="single-publication mt-30 text-center">
                                <div class="image">
                                    <img src="{{ asset('assets/' .$course->image_path) }}" alt="Publication">
                                    <div class="add-cart">
                                        <ul>
                                            <li><a href="{{route('courses-details', $course->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                            {{-- <li><a href="#"><i class="fa fa-heart-o"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="content pt-10">
                                    <h5 class="book-title"><a href="{{route('courses-details', $course->id)}}">{{$course->title}}</a></h5>
                                    <p class="writer-name"><span></span>
                                        {{-- {{ substr($course->description, 0, 70) }} ...    --}}
                                    <p>
                                    <div class="price-btn d-flex align-items-center justify-content-between">
                                        <div class="price pt-20">
                                            <span class="discount-price">₦{{ number_format($course->sale_price) }}</span>
                                            <span class="normal-price">₦{{ number_format($course->new_price) }}</span>
                                        </div>
                                        <div class="button pt-10">
                                            <a href="{{route('courses-details', $course->id)}}" class="main-btn">
                                                <i class="fa fa-cart-plus"></i> Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single publication -->
                        </div>
                    @empty
                        <p>No courses found</p>
                    @endforelse
                    
                </div> <!-- row -->
            </div>
            <hr>
            <div class="tab-pane fade" id="courses-list" role="tabpanel" aria-labelledby="courses-list-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-course mt-30">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="{{ asset('uassets/images/course/cu-1.jpg')}}" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviews)</span>
                                        <a href="#"><h4>Learn basic javascript from start for beginner</h4></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="images/course/teacher/t-1.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Mark anthem</h6></a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--  row  -->
                        </div> <!-- single course -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single-course mt-30">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="images/course/cu-2.jpg" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviews)</span>
                                        <a href="#"><h4>Learn basic javascript from start for beginner</h4></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="images/course/teacher/t-2.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Mark anthem</h6></a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--  row  -->
                        </div> <!-- single course -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single-course mt-30">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="images/course/cu-3.jpg" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviews)</span>
                                        <a href="#"><h4>Learn basic javascript from start for beginner</h4></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Mark anthem</h6></a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--  row  -->
                        </div> <!-- single course -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single-course mt-30">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="images/course/cu-4.jpg" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviews)</span>
                                        <a href="#"><h4>Learn basic javascript from start for beginner</h4></a>
                                        
                                    </div>
                                </div>
                            </div> <!--  row  -->
                        </div> <!-- single course -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- tab content -->
        <div class="row">
            <div class="col-lg-12">
                <nav class="courses-pagination mt-50">
                    <ul class="pagination justify-content-center">
                       
                        <li class="page-item">
                            {{$courses->links()}}
                            </li>
                        </li>
                    </ul>
                </nav>  <!-- courses pagination -->
            </div>
        </div>  <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COURSES PART ENDS ======-->


@endsection