@extends('layouts.frontend.app')

@section('slider')
<section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h3>We Ensure better education <br />for a better world</h3>
                        <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.</p>
                        <a class="main_btn" href="#">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('finance')
<section class="finance_area">
            <div class="container">
                <div class="finance_inner row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="finance_item">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="lnr lnr-rocket"></i>
                                </div>
                                <div class="media-body">
                                    <h5>Science & <br />Engineering</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="finance_item">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="lnr lnr-earth"></i>
                                </div>
                                <div class="media-body">
                                    <h5>Science & <br />Engineering</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="finance_item">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="lnr lnr-smile"></i>
                                </div>
                                <div class="media-body">
                                    <h5>Science & <br />Engineering</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="finance_item">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="lnr lnr-tag"></i>
                                </div>
                                <div class="media-body">
                                    <h5>Science & <br />Engineering</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('courses')
<section class="courses_area p_120">
            <div class="container">
                <div class="main_title">
                    <h2>Popular Free Courses</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
                </div>
                <div class="row courses_inner">
                    <div class="col-lg-9">
                        <div class="grid_inner">
                            <div class="grid_item wd55">
                                <div class="courses_item">
                                    <img src="{{asset('frontend/img/courses/course-1.jpg')}}" alt="">
                                    <div class="hover_text">
                                        <a class="cat" href="#">Free</a>
                                        <a href="#"><h4>Japanease Language Class</h4></a>
                                        <ul class="list">
                                            <li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
                                            <li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
                                            <li><a href="#"><i class="lnr lnr-user"></i> T. Robert</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_item wd44">
                                <div class="courses_item">
                                    <img src="{{asset('frontend/img/courses/course-2.jpg')}}" alt="">
                                    <div class="hover_text">
                                        <a class="cat" href="#">Free</a>
                                        <a href="#"><h4>Japanease Language Class</h4></a>
                                        <ul class="list">
                                            <li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
                                            <li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
                                            <li><a href="#"><i class="lnr lnr-user"></i> T. Robert</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_item wd44">
                                <div class="courses_item">
                                    <img src="{{asset('frontend/img/courses/course-4.jpg')}}" alt="">
                                    <div class="hover_text">
                                        <a class="cat" href="#">Free</a>
                                        <a href="#"><h4>Japanease Language Class</h4></a>
                                        <ul class="list">
                                            <li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
                                            <li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
                                            <li><a href="#"><i class="lnr lnr-user"></i> T. Robert</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_item wd55">
                                <div class="courses_item">
                                    <img src="{{asset('frontend/img/courses/course-5.jpg')}}" alt="">
                                    <div class="hover_text">
                                        <a class="cat" href="#">Free</a>
                                        <a href="#"><h4>Japanease Language Class</h4></a>
                                        <ul class="list">
                                            <li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
                                            <li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
                                            <li><a href="#"><i class="lnr lnr-user"></i> T. Robert</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="course_item">
                            <img src="{{asset('frontend/img/courses/course-3.jpg')}}" alt="">
                            <div class="hover_text">
                                <a class="cat" href="#">Free</a>
                                <a href="#"><h4>Japanease Language Class</h4></a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i> T. Robert</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('team')
<section class="team_area p_120">
            <div class="container">
                <div class="main_title">
                    <h2>Meet Our Faculty</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
                </div>
                <div class="row team_inner">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="{{asset('frontend/img/team/team-1.jpg')}}" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="{{asset('frontend/img/team/team-3.jpg')}}" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="{{asset('frontend/img/team/team-4.jpg')}}" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

@section('testimoni')
<section class="testimonials_area p_120">
            <div class="container">
                <div class="testi_slider owl-carousel">
                    <div class="item">
                        <div class="testi_item">
                            <img src="{{asset('frontend/img/testimonials/testi-3.png')}}" alt="">
                            <h4>Fannie Rowe</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="{{asset('frontend/img/testimonials/testi-3.png')}}" alt="">
                            <h4>Fannie Rowe</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="{{asset('frontend/img/testimonials/testi-3.png')}}" alt="">
                            <h4>Fannie Rowe</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('pakages')
 <section class="packages_area p_120">
            <div class="container">
                <div class="row packages_inner">
                    <div class="col-lg-4">
                        <div class="packages_text">
                            <h3>Choose <br />Course Packages</h3>
                            <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="packages_item">
                            <div class="pack_head">
                                <i class="lnr lnr-graduation-hat"></i>
                                <h3>Premium</h3>
                                <p>For the individuals</p>
                            </div>
                            <div class="pack_body">
                                <ul class="list">
                                    <li><a href="#">Secure Online Transfer</a></li>
                                    <li><a href="#">Unlimited Styles for interface</a></li>
                                    <li><a href="#">Reliable Customer Service</a></li>
                                </ul>
                            </div>
                            <div class="pack_footer">
                                <h4>£399.00</h4>
                                <a class="main_btn" href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="packages_item">
                            <div class="pack_head">
                                <i class="lnr lnr-diamond"></i>
                                <h3>Exclusive</h3>
                                <p>For the individuals</p>
                            </div>
                            <div class="pack_body">
                                <ul class="list">
                                    <li><a href="#">Secure Online Transfer</a></li>
                                    <li><a href="#">Unlimited Styles for interface</a></li>
                                    <li><a href="#">Reliable Customer Service</a></li>
                                </ul>
                            </div>
                            <div class="pack_footer">
                                <h4>£399.00</h4>
                                <a class="main_btn" href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection