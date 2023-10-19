@extends('layouts.header')

@section('content')

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    @if ($course)
                    <h2>{{ $course->$title}}</h2>
                    @endif
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('user.courses')}}">Courses</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> </li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

 
    <!--====== COURSES SINGEl PART START ======-->
    
    <section id="courses-single" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if ($course)
                    <div class="courses-single-left mt-30">
                        <div class="title">
                            <h3> {{ $course->title}}</h3>
                        </div> <!-- title -->
                        <div class="course-terms">
                           
                        </div> <!-- course terms -->
                        
                        <div class="courses-single-image pt-50">
                            <img src="{{ asset('assets/' .$course->image_path) }}" alt="Course">
                        </div> <!-- courses single image -->
                        
                        <div class="courses-tab mt-30">
                            <ul class="nav nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a  id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                </li>
                                
                                {{-- <li class="nav-item">
                                    <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                                </li> --}}
                            </ul>
                            
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-description">
                                        <div class="single-description pt-40">
                                            <h6>Course Summery</h6>
                                            <p>{{ $course->description}}</p>
                                        </div>
                                        
                                    </div> <!-- overview description -->
                                </div>
                               
                            </div> <!-- tab content -->
                        </div>
                    </div> <!-- courses single left -->
                    
                    @endif
                   
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                               <h4>Course Features </h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Duaration : <span>10 Hours</span></li>
                                    <li><i class="fa fa-clone"></i>Leactures : <span>09</span></li>
                                    <li><i class="fa fa-beer"></i>Quizzes :  <span>05</span></li>
                                    <li><i class="fa fa-user-o"></i>Students :  <span>100</span></li>
                                </ul>
                                @if ($course)
                                <div class="price-button pt-10">
                                    <span>Price : <b>₦{{ $course->new_price}} </b></span>
                                    <a href="#" class="main-btn">Add to cart</a>
                                </div>
                                @endif
                                
                            </div> <!-- course features -->
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="You-makelike mt-30">
                                <h4>You make like </h4> 
                                @foreach ($categories as $category )
                                <div class="single-makelike mt-20">
                                    <div class="image">
                                        <img src="{{ asset('uassets/images/your-make/y-1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="#"><h4 class="text-white">{{ $category->name}}</h4></a>
                                       
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="related-courses pt-95">
                        <div class="title">
                            <h3>Related Courses</h3>
                        </div>
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
                                                    <span class="normal-price">₦{{number_format( $course->new_price)}}</span>
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
                                <p>No Course found</p>
                            @endforelse
                           
                        </div> <!-- row -->
                        
                    </div> <!-- related courses -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== COURSES SINGEl PART ENDS ======-->
   


@endsection