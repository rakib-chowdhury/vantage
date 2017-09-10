@extends('vantage.layout_home.main')
@section('page_title')
    {{$company[0]->name}} | Treatment
    @endsection
    @section('page_content')
            <!-- Intro Header class=intros -->
    <header class="intro others " style="height: 650px; background-image:url('public/images/treatment.jpg')">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <hr>
                        <h2>Vantage Natural Health Centre</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <a class="btn btn-success" data-toggle="modal" data-target="#treatmntMDL">Learn More</a>
                        <div id="treatmntMDL" class="modal fade" tabindex="-1" role="dialog"
                         aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h3 class="modal-title" id="myModalLabel">Vantage Natural Health Centre</h3>
                                </div>
                                <div class="modal-body">
                                    <?php echo $healthCntre[0]['details'];?>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    @php
    $serviceID=array('cryolipolysis-services','far-services','foot-services','microvibrations-services','alkaline-services');
    $serviceCLASS=array('cryolipolysis-service','far-service','foot-service','microvibrations-service','alkaline-service');
    @endphp
    @foreach($treatment_info as $key2=>$service)
        <section id="treatment_{{$key2}}" class="treatments_{{$key2}}  content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 @if(($key2%2)==0){{'col-md-offset-8'}}@endif">
                        <div class="description " >
                            <h2>{{$service->name}}</h2>
                            <p>{{$service->subject}}
                                <button class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal_{{$key2}}">Learn More
                                </button>

                            </p>
                        </div>
                    </div>
                    <div id="modal_{{$key2}}" class="modal fade treatments_0" tabindex="-1" role="dialog"
                         aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">{{$service->name}}</h4>
                                </div>
                                <div class="modal-body">
                                    <?php echo $service->details;?>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /modal -->
                </div>
            </div>
        </section>
    @endforeach

@endsection
