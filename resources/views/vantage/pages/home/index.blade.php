@extends('vantage.layout_home.main')
@section('page_title')
    {{$company[0]->name}} | Home
    @endsection
    @section('page_content')
            <!-- Intro Header -->
    <header class="intro" style="height: 650px;">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h4>Safe and effective</h4>
                        <hr>
                        <h2>TREATMENTS WITHOUT DRUGS OR SURGERY</h2>
                        <hr>
                        <a href="#about" class="btn btn-primary btn-lg page-scroll call-to-action">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section about-us text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <img src="{{url('resources/assets/vantage_home/')}}/img/about.png"
                     alt="About us picture. Some doctors pictures" class="img-responsive">
                <h2>
                    <span>Story About us</span>
                </h2>
                <p>{{$about_info[0]->subject}}</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#aboutUS">LEARN MORE</a>

                <div id="aboutUS" class="modal fade about-us-modal" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Story About Us</h4>
                            </div>
                            <div class="modal-body">
                                <?php echo $about_info[0]->details;?>
                            </div>
                        </div>
                    </div>
                </div> <!-- /modal -->

            </div>
        </div>
    </section>

    <!-- team section -->
    <section id="team" class="team content-section">
        <div class="container">
            <h2 class="text-center"><span>Meet our team</span></h2>
            {{--<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>--}}


            <div id="our-team-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($team_info as $key=>$team)
                        <li data-target="#our-team-carousel" data-slide-to="{{$key}}"
                            class="@if($key==0){{'active'}}@endif"></li>
                    @endforeach
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($team_info as $key=>$teams)
                        <div class="item @if($key==0){{'active'}}@endif">
                            <div class="row">
                                <div class="col-xs-12">
                                    <figure class="clearfix">
                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                            <img class="img-responsive media-object"
                                                 src="{{url('public/images/team/')}}/{{$teams->image}}">
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <figcaption class="caption">
                                                <p>
                                                    {{$teams->subject}}
                                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                                       data-target="#team-modal_{{$key}}">Read More</a>

                                                </p>
                                                <blockquote class="no-margin">
                                                    <p>{{$teams['employee']['name']}}</p>
                                                    <small>{{$teams->role}}</small>
                                                </blockquote>
                                            </figcaption>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div id="team-modal_{{$key}}" class="modal fade team-modal" tabindex="-1"
                             role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content" style="overflow-y: scroll; max-height: 650px;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title"
                                            id="myModalLabel">{{$teams['employee']['name']}}</h4>
                                    </div>
                                    <div class="modal-body" >
                                        <?php echo $teams->details;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#our-team-carousel" data-slide="prev"> <span
                            class="glyphicon glyphicon-chevron-left"></span> </a>
                <a class="right carousel-control" href="#our-team-carousel" data-slide="next"> <span
                            class="glyphicon glyphicon-chevron-right"></span> </a>
            </div>
        </div> <!-- /container -->
    </section>


    <!-- Services package -->

    <section id="services" class="content-section services">
        <div class="container">
            <div class="row">
                <h2 class="text-center"><span>Service Packages</span></h2>
                <div class="service-table pricing-three-column col-md-12">
                    @foreach($package_info as $key1=>$package)
                        <div class="plan col-sm-6 col-lg-3">
                            <div class="plan-name-green">
                                <h3>{{$package->name}}</h3>
                            </div>
                            <ul>
                                <li class="plan-feature" style="min-height: 150px;">
                                    {{$package->subject}}
                                </li>
                                <li class="plan-feature">
                                    <a href="#" class="btn btn-primary btn-plan-select"
                                       data-toggle="modal"
                                       data-target="#service-package-modal_{{$key1}}">
                                        <i class="icon-white icon-ok"></i>Read More</a>
                                </li>
                            </ul>
                        </div>
                        <div id="service-package-modal_{{$key1}}" class="modal fade service-package-modal" tabindex="-1"
                             role="dialog"
                             aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">{{$package->name}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $package->details;?>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /modal -->
                    @endforeach
                </div>
            </div>
            <div class="row" style="text-align:center; margin-top:20px;">
		<button data-toggle="modal"  data-target="#timelineMDL" class="btn btn-primary btn-plan-select">
                      <span class="glyphicon glyphicon-time"> Timeline</span>
                </button>
		<div id="timelineMDL" class="modal fade service-package-modal" tabindex="-1"
                             role="dialog"
                             aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Timeline</h4>
                            </div>
                            <div class="modal-body">
                                <?php echo $timelineINFO[0]->details;?>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </section> <!-- /services -->


    <!-- Testimonials -->

    <section id="testimonial" class="testimonial content-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center"><span>TESTIMONIAL</span></h2>

                <div class="col-md-8 col-md-offset-2">
                    <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="10000">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            @foreach($testimonial as $key5=>$tstmnl)
                                <li data-target="#fade-quote-carousel" data-slide-to="{{$key5}}"
                                    class="@if($key5==0){{'active'}}@endif"></li>
                            @endforeach
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            @foreach($testimonial as $key6=>$tstmnls)
                                <div class="item @if($key6==0){{'active'}}@endif">
                                    <div class="profile-circle" style="background-color: rgba(0,0,0,.2);">
                                        <img src="{{url('public/images/no_img.png')}}" alt="">
                                    </div>
                                    <blockquote>
                                        <p>"{{$tstmnls->details}}"</p>
                                    </blockquote>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->
    </section>

    <!-- Why Choose US -->

    {{--<section id="why-choose-us" class="why-choose-us content-section">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-10 col-lg-offset-1">--}}
                    {{--<h2 class="text-center"><span>WHY CHOOSE US?</span></h2>--}}
                    {{--<p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy--}}
                        {{--nibh--}}
                        {{--euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,--}}
                        {{--quis--}}
                        {{--nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.--}}
                        {{--Duis--}}
                        {{--autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie conlaritas est etiam--}}
                        {{--processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam--}}
                        {{--littera--}}
                        {{--gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula--}}
                        {{--dem--}}
                        {{--modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

@endsection
