<!-- @extends('frontend.index') -->
@extends('frontend.index')
@section('content')
   <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="{{asset("edu/images/slider/1.jpg")}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>University</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <!-- <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a> -->
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset("edu/images/slider/2.jpg")}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Admission open <span>2018</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <!-- <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">Read More</a> -->
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset("edu/images/slider/3.jpg")}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Education <span>Master</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <!-- <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a> -->
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>
@endsection