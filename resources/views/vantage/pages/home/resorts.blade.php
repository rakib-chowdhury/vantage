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
                            <?= $resort_info[0]->details ?>
                        </div>
                    </div>
                </div>
            </div> <!-- /modal -->

           <?php
                if (sizeof($resort_pic) == 0) { }
                    else {
                    ?>
                    <div class="row">
                        <h4 style="text-align: center;margin: 10px 0px;"><?= $resort_pic[0]->name ?></h4>
                        <div id="elastic_grid_demo1" class="resort_pics" data-type= "1"></div>
                        <div style="text-align:center; margin-bottom:20px;">
                            <?php if (sizeof($resort_pic) <= 7) {
                            } else {
                                ?>
                                <button class="btn btn-success resortMore">More</button>
                    <?php } ?>
                        </div>
                    </div>
                            
                        <?php } ?>

            @foreach($resort_pic as $rpic)
            <!--                    <div class="col-lg-3 col-md-3 col-xs-6 about-resort-img">
                                    <a class="" href="{{url('public/images/resort/')}}/{{$rpic->image}}"
                                       data-lightbox="about-resort"
                                       data-title="Click the right half of the image to move forward.">
                                        <img style="width: 100%; height: 100%" class="img-responsive"
                                             src="{{url('public/images/resort/')}}/{{$rpic->image}}"
                                             alt=""/>
                                    </a>
                                </div>-->
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


            <?php
                if (sizeof($vip_resort_pic) == 0) { }
                    else {
                    ?>
                    <div class="row">
                        <h4 style="text-align: center;margin: 10px 0px;"><?= $vip_resort_pic[0]->name ?></h4>
                        <div id="elastic_grid_demo2" class="resort_vip_pics" data-type= "2"></div>
                        <div style="text-align:center; margin-bottom:20px;">
                            <?php if (sizeof($vip_resort_pic) <= 8) {
                            } else {
                                ?>
                                <button class="btn btn-success vipResortMore">More</button>
                    <?php } ?>
                        </div>
                    </div>
                            
                        <?php } ?>

            @foreach($vip_resort_pic as $rpic)
            <!--                    <div class="col-lg-3 col-md-3 col-xs-6 about-resort-img">
                                    <a class="" href="{{url('public/images/vip_resort/')}}/{{$rpic->image}}"
                                       data-lightbox="about-resort"
                                       data-title="Click the right half of the image to move forward.">
                                        <img style="width: 100%; height: 100%" class="img-responsive"
                                             src="{{url('public/images/vip_resort/')}}/{{$rpic->image}}"
                                             alt=""/>
                                    </a>
                                </div>-->
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
                            <?= $other_facility_info[0]->details ?>
                        </div>
                    </div>
                </div>
            </div> <!-- /modal -->


            <?php
                if (sizeof($other_pic) == 0) { }
                    else {
                
                    ?>
                    <div class="row">
                        <h4 style="text-align: center;margin: 10px 0px;"><?= $other_pic[0]->name ?></h4>
                        <div id="elastic_grid_demo3" class="resort_other_pics" data-type= "3"></div>
                        <div style="text-align:center; margin-bottom:20px;">
                            <?php if (sizeof($other_pic) <= 8) {
                                
                            } else {
                                ?>
                                <button class="btn btn-success otherResortMore">More</button>
                    <?php } ?>
                        </div>
                    </div>
                            
                        <?php } ?>
                    
                   


            @foreach($other_pic as $rpic)
            <!--                    <div class="col-lg-3 col-md-3 col-xs-6 about-resort-img">
                                    <a class="" href="{{url('public/images/resort/')}}/{{$rpic->image}}"
                                       data-lightbox="about-resort"
                                       data-title="Click the right half of the image to move forward.">
                                        <img style="width: 100%; height: 100%" class="img-responsive"
                                             src="{{url('public/images/other/')}}/{{$rpic->image}}"
                                             alt=""/>
                                    </a>
                                </div>-->
            @endforeach

        </div>
    </div>
</section>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="public/gallery/js/modernizr.custom.js"></script>
<script src="public/gallery/js/classie.js"></script>
<script type="text/javascript" src="public/gallery/js/elastic_grid.min.js"></script>


<script>
    $(document).ready(function () {
        $(".resort_pics").each(function () {
            var cat_id = $(this).attr("data-type");
            var div_id = $(this).attr('id');
//            alert(div_id);
            $.ajax({
                type: 'get',
                url: '{{url("get-resort-pics")}}',
                data: {
                    catId: cat_id
                }, success: function (result) {
//                    alert(result)
                    var itms = [];
                    $.each(result, function (i, res) {
                        if(i<=8){
                            itms.push({
                                title: res.room_name,
                                thumbnail: ['public/images/resort_thumbnail/' + res.image],
                                large: ['public/images/resort/' + res.image],
                                button_list: [],
                                tags: [res.resort_cat.resort_cat_name]
                            });    
                        }
                    });

                    $('#' + div_id).elastic_grid({
                        'showAllText': 'All',
                        'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
                        'hoverDirection': true,
                        'hoverDelay': 0,
                        'hoverInverse': false,
                        'expandingSpeed': 500,
                        'expandingHeight': 500,
                        'items': itms
                    });
                }
            });
        });


        $(".resortMore").click(function () {
            var cat = $(this).parent().parent().find('.resort_pics').attr('data-type');
//            var subCat =  $(this).parent().parent().find('.resort_pics').contents().find("ul li.current a").html();
//            console.log(cat);
//            console.log(subCat);

            var div_id = $(this).parent().parent().find('.resort_pics').attr('id');
            alert(div_id)
            console.log(div_id);
            $.ajax({
                type: 'get',
                url: '{{url("get_resort_pics")}}',
                data: {
                    catId: cat
//                    subCat : subCat
                }, success: function (result) {
                    alert(result)
                    var itms = [];
                    $.each(result, function (i, res) {
                        itms.push({
                            title: res.room_name,
                            thumbnail: ['public/images/resort_thumbnail/' + res.image],
                            large: ['public/images/resort/' + res.image],
                            button_list: [],
                            tags: [res.resort_cat.resort_cat_name]
                        });
                    });

                    $('#' + div_id).elastic_grid({
                        'showAllText': 'All',
                        'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
                        'hoverDirection': true,
                        'hoverDelay': 0,
                        'hoverInverse': false,
                        'expandingSpeed': 500,
                        'expandingHeight': 500,
                        'items': itms
                    });
                }
            });
        });
    });
</script>


<script>
    $(document).ready(function () {
        $(".resort_vip_pics").each(function () {
            var cat_id = $(this).attr("data-type");
            var div_id = $(this).attr('id');
//            alert(div_id);
            $.ajax({
                type: 'get',
                url: '{{url("get-vip-resort-pics")}}',
                data: {
                    catId: cat_id
                }, success: function (result) {
//                    alert(result)
                    var itms = [];
                    $.each(result, function (i, res) {
                        if(i<=7){
                            itms.push({
                                title: res.room_name,
                                thumbnail: ['public/images/resort_thumbnail/' + res.image],
                                large: ['public/images/vip_resort/' + res.image],
                                button_list: [],
                                tags: [res.resort_cat.resort_cat_name]
                            });    
                        }
                    });console.log(itms);

                    $('#' + div_id).elastic_grid({
                        'showAllText': 'All',
                        'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
                        'hoverDirection': true,
                        'hoverDelay': 0,
                        'hoverInverse': false,
                        'expandingSpeed': 500,
                        'expandingHeight': 500,
                        'items': itms
                    });
                }
            });
        });


        $(".vipResortMore").click(function () {
            var cat = $(this).parent().parent().find('.resort_vip_pics').attr('data-type');
//            var subCat =  $(this).parent().parent().find('.resort_pics').contents().find("ul li.current a").html();
//            console.log(cat);
//            console.log(subCat);

            var div_id = $(this).parent().parent().find('.resort_vip_pics').attr('id');
            console.log(div_id);
            $.ajax({
                type: 'get',
                url: '{{url("get_vip_resort_pics")}}',
                data: {
                    catId: cat
                }, success: function (result) {
                    var itms = [];
                    $.each(result, function (i, res) {
                        itms.push({
                            title: res.room_name,
                            thumbnail: ['public/images/resort_thumbnail/' + res.image],
                            large: ['public/images/vip_resort/' + res.image],
                            button_list: [],
                            tags: [res.resort_cat.resort_cat_name]
                        });
                    });

                    $('#' + div_id).elastic_grid({
                        'showAllText': 'All',
                        'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
                        'hoverDirection': true,
                        'hoverDelay': 0,
                        'hoverInverse': false,
                        'expandingSpeed': 500,
                        'expandingHeight': 500,
                        'items': itms
                    });
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(".resort_other_pics").each(function () {
            var cat_id = $(this).attr("data-type");
            var div_id = $(this).attr('id');
//            alert(div_id);
            $.ajax({
                type: 'get',
                url: '{{url("get-other-resort-pics")}}',
                data: {
                    catId: cat_id
                }, success: function (result) {
//                    alert(result)
                    var itms = [];
                    $.each(result, function (i, res) {
                        if(i<=7){
                            itms.push({
                                title: res.room_name,
                                thumbnail: ['public/images/resort_thumbnail/' + res.image],
                                large: ['public/images/other/' + res.image],
                                button_list: [],
                                tags: [res.resort_cat.resort_cat_name]
                            });    
                        }
                    });

                    $('#' + div_id).elastic_grid({
                        'showAllText': 'All',
                        'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
                        'hoverDirection': true,
                        'hoverDelay': 0,
                        'hoverInverse': false,
                        'expandingSpeed': 500,
                        'expandingHeight': 500,
                        'items': itms
                    });
                }
            });
        });


        $(".otherResortMore").click(function () {
            var cat = $(this).parent().parent().find('.resort_other_pics').attr('data-type');
//            var subCat =  $(this).parent().parent().find('.resort_pics').contents().find("ul li.current a").html();
//            console.log(cat);
//            console.log(subCat);

            var div_id = $(this).parent().parent().find('.resort_other_pics').attr('id');
            console.log(div_id);
            $.ajax({
                type: 'get',
                url: '{{url("get_other_resort_pics")}}',
                data: {
                    catId: cat
                }, success: function (result) {
                    var itms = [];
                    $.each(result, function (i, res) {
                        itms.push({
                            title: res.room_name,
                            thumbnail: ['public/images/resort_thumbnail/' + res.image],
                            large: ['public/images/other/' + res.image],
                            button_list: [],
                            tags: [res.resort_cat.resort_cat_name]
                        });
                    });

                    $('#' + div_id).elastic_grid({
                        'showAllText': 'All',
                        'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
                        'hoverDirection': true,
                        'hoverDelay': 0,
                        'hoverInverse': false,
                        'expandingSpeed': 500,
                        'expandingHeight': 500,
                        'items': itms
                    });
                }
            });
        });
    });
</script>





</body>
</html>