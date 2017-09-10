@extends('vantage.layout_home.main')
@section('page_title')
    {{$company[0]->name}} | Resorts
    @endsection
    @section('page_content')

   <!-- Intro Header -->

    <section style="height: 650px;" id="resorts" class="resorts content-section">
        <div class="container">
            <div class="row nav" style="margin-top: 200px;">
                <div class="col-lg-3 col-lg-offset-3 col-sm-6 text-center">
                    <a class="page-scroll" href="#about-resort">About Resorts</a>
                </div>
                <div class="col-lg-3 col-sm-6 text-center">
                    <a class="page-scroll" href="#vip-resort">VIP Resorts</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about-resort" class="about-resort content-section" style="background:white">
        <div class="container">
            <div class="row">

                <h2 class="text-center"><span>About Resort</span></h2>
                <p class="text-center">
                    {{$resort_info[0]->subject}}
                    <br>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#about-resort-modal">Learn
                        More</a>
                </p>

                <div id="about-resort-modal" class="modal fade about-resort-modal" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">About Resort</h4>
                            </div>
                            <div class="modal-body">
                                <?=$resort_info[0]->details?>
                            </div>
                        </div>
                    </div>
                </div> <!-- /modal -->
                @foreach($resort_pic as $rpic)
                    <div class="col-lg-3 col-md-3 col-xs-6 about-resort-img">
                        <a class="" href="{{url('public/images/resort/')}}/{{$rpic->image}}"
                           data-lightbox="about-resort"
                           data-title="Click the right half of the image to move forward.">
                            <img style="width: 100%; height: 100%" class="img-responsive"
                                 src="{{url('public/images/resort/')}}/{{$rpic->image}}"
                                 alt=""/>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section id="vip-resort" class="vip-resort content-section" style="background:rgba(238, 238, 238, 0.71)">
        <div class="container">
            <div class="row">

                <h2 class="text-center"><span>VIP Resort</span></h2>
                <p class="text-center">
                    {{$vip_resort_info[0]->subject}}
                    <br>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#vip-resort-modal">Learn
                        More</a>
                </p>

                <div id="vip-resort-modal" class="modal fade vip-resort-modal" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">VIP Resort</h4>
                            </div>
                            <div class="modal-body">
                                <?=$vip_resort_info[0]->details?>
                            </div>
                        </div>
                    </div>
                </div> <!-- /modal -->

                @foreach($vip_resort_pic as $rpic)
                    <div class="col-lg-3 col-md-3 col-xs-6 about-resort-img">
                        <a class="" href="{{url('public/images/vip_resort/')}}/{{$rpic->image}}"
                           data-lightbox="about-resort"
                           data-title="Click the right half of the image to move forward.">
                            <img style="width: 100%; height: 100%" class="img-responsive"
                                 src="{{url('public/images/vip_resort/')}}/{{$rpic->image}}"
                                 alt=""/>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="other" class="about-resort content-section" style="background:white">
        <div class="container">
            <div class="row">

                <h2 class="text-center"><span>Other Facilities</span></h2>
                <p class="text-center">
                    {{$other_facility_info[0]->subject}}
                    <br>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#orher-resort-modal">Learn
                        More</a>
                </p>

                <div id="orher-resort-modal" class="modal fade about-resort-modal" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Other Facilities</h4>
                            </div>
                            <div class="modal-body">
                                <?=$other_facility_info[0]->details?>
                            </div>
                        </div>
                    </div>
                </div> <!-- /modal -->
                @foreach($other_pic as $rpic)
                    <div class="col-lg-3 col-md-3 col-xs-6 about-resort-img">
                        <a class="" href="{{url('public/images/resort/')}}/{{$rpic->image}}"
                           data-lightbox="about-resort"
                           data-title="Click the right half of the image to move forward.">
                            <img style="width: 100%; height: 100%" class="img-responsive"
                                 src="{{url('public/images/other/')}}/{{$rpic->image}}"
                                 alt=""/>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
