<section id="footer-top" class="footer-top content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>OUR LOCATION</h4>
                @foreach($company_address as $cAddrss)
                <ul class="list-unstyled">
                    <li>{{$cAddrss->house_no}},{{$cAddrss->street_no}}</li>
                    <li>{{$cAddrss->others}}{{$cAddrss->city}},{{$cAddrss->country}}</li>
                    <li>{{$cAddrss->phone}}</li>
                </ul>
                <br>
                @endforeach

                <br>
                <ul class="list-inline social">
                    <li><a href="{{$company[0]->facebookLink}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{$company[0]->googlePlusLink}}"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="{{$company[0]->youtubeLink}}"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="{{$company[0]->linkedinLink}}"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="{{$company[0]->twitterLink}}"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- /col -->

            <div class="col-md-4">
                <h4>Support</h4>
                <ul class="list-unstyled">
                    @foreach($support_info as $key90=>$s)
                    @if($s->type==2)
                    <li><a href="{{url($s->link)}}">{{$s->name}}</a></li>                                                   
                    @else
                    <li><a style="cursor: pointer" data-toggle="modal" data-target="#support_{{$s->id}}">{{$s->name}}</a>
                        <div id="support_{{$s->id}}" class="modal fade about-us-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel" style="color: black">{{$s->name}}</h4>
                                    </div>
                                    <div class="modal-body" style="color: black;">
                                        <?= $s->details ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif						
                        @endforeach
                        {{--<li><a style="cursor: pointer" data-toggle="modal" data-target="#support_0">Terms &amp; Conditions</a></li>                    --}}
                        {{--<li><a href="{{url('service')}}">Services</a></li>--}}
                    {{--<li><a href="{{url('home#about')}}">About Us</a></li>--}}
                    {{--<li><a href="{{url('contact')}}">Contact Us</a></li>--}}
                    {{--<li><a href="{{url('Login')}}">Login</a></li>--}}
                </ul>
            </div> <!-- /col -->           

            <div class="col-md-4">
                <h4>Subscribe us</h4>
                <p>Subscribe us to get latest news and information.</p>
                <form action="" class="subscribe">
                    <input type="email" placeholder="E-mail here">
                    <button type="submit" class="btn btn-success">SUBSCRIBE</button>
                </form>
            </div>
        </div> <!-- /row -->
    </div> <!-- /container -->
</section>