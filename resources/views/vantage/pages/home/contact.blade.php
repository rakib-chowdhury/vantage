@extends('vantage.layout_home.main')
@section('page_title')
    {{$company[0]->name}} | Contact
    @endsection
    @section('page_content')
            <!-- Intro Header -->
    <header class="intro others">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <hr>
                        <h2>Contact Us</h2>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section id="contact-us" class="contact-us content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    @if( Session::has('message') )
                        <div class="panel panel-success" style="background-color: #329c3b; color: whitesmoke; padding: 7px;" ><span class="fa fa-smile-o">Successfully send...</span>
                        </div>
                    @endif
                    <div class="contact-form">
                        <h2>Leave a message</h2>
                        <hr>
                        <form onsubmit="return chckMsg()" action="{{url('message/send')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name">Your Name *</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                <span style="color: red; font-size: 12px; display: none;" id="name_err">Required</span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address *</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Address"
                                       required>
                                <span style="color: red; font-size: 12px; display: none;" id="email_err">Required</span>
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile Number *</label>
                                <input onkeyup="chkMb(this.id)" type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile Number"
                                       required>
                                <span style="color: red; font-size: 12px; display: none;" id="mb_err">Required</span>
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject *</label>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                       required>
                                <span style="color: red; font-size: 12px; display: none;" id="subject_err">Required</span>
                            </div>

                            <div class="form-group">
                                <label for="message">Your Message *</label>
                                <textarea name="message" id="message" class="form-control" rows="8" required></textarea>
                                <span style="color: red; font-size: 12px; display: none;" id="msg_err">Required</span>
                            </div>

                            <button type="submit" class="btn btn-success btn-block btn-lg">Send Message</button>
                        </form>
                    </div> <!-- /contact-form -->
                </div> <!-- col -->

                <div class="col-md-6 col-md-offset-1">
                    <div class="contact-information">
                        <h2>Contact Information</h2>

                        <p></p>

                        <ul class="list-unstyled address">
                            <li>
                                <i style="color:green" class="glyphicon glyphicon-map-marker"></i>
                                {{$company_address[0]->house_no}},{{$company_address[0]->street_no}},{{$company_address[0]->others}},{{$company_address[0]->city}},{{$company_address[0]->country}}
                            </li>

                            <li>
                                <i style="color:green" class="glyphicon glyphicon-earphone"></i>
                                {{$company[0]->contact}}
                            </li>
                            <li>
                                <i style="color:green" class="glyphicon glyphicon-envelope"></i>
                                {{$company[0]->mailAddress}}
                            </li>
                        </ul>

                        <ul class="list-unstyled address">
                            <li>
                                <a class="btn btn-success" data-toggle="modal" data-target="#modal_location">Location Details</a>
                            </li>
                        </ul>

                        <ul class="list-inline social">
                            <li><a href="{{$company[0]->facebookLink}}"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="{{$company[0]->googlePlusLink}}"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="{{$company[0]->youtubeLink}}"><i class="fa fa-youtube-square"></i></a></li>
                            <li><a href="{{$company[0]->linkedinLink}}"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="{{$company[0]->twitterLink}}"><i class="fa fa-twitter-square"></i></a></li>
                        </ul>

                        <div class="gmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.029245554656!2d100.86724531437441!3d12.905840990899064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31029660cb76e061%3A0x14b5779dfd1e9d20!2sVantage+Natural+Health+Centre!5e0!3m2!1sen!2s!4v1482302637879" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                        <button class="btn btn-primary" onclick="locationMap(1)">Vantage Natural Health Centre</button>
                        <button class="btn btn-primary" onclick="locationMap(2)">Vantage Resort</button>
                        <!--<button class="btn btn-primary" onclick="locationMap(3)">Location Three</button>-->
                    </div>
                </div> <!-- /.col -->

            </div> <!-- /row -->
        </div> <!-- /.container -->
    </section>
                                <div id="modal_location" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content" style="background:">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel" style="text-align:center">Location Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo $location_info[0]->details;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

@endsection
<script>
    function chkMb(id) {
        var x=document.getElementById(id);
        x.value= x.value.replace(/[^0-9+]/, '');
        console.log(x.value);
    }
    function locationMap(n) {
        switch (n) {
            case 1:
                $('.gmap').html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.029245554656!2d100.86724531437441!3d12.905840990899064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31029660cb76e061%3A0x14b5779dfd1e9d20!2sVantage+Natural+Health+Centre!5e0!3m2!1sen!2s!4v1482302637879" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');
                break;

            case 2:
                $('.gmap').html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.446701963653!2d100.9226833148217!3d12.94324299087448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31029587f82f032b%3A0x7739918f6343657a!2sVantage+Resort!5e0!3m2!1sen!2s!4v1482302436908" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');
                break;

            case 3:
                $('.gmap').html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24565.743299784208!2d90.39041209775957!3d23.75737689136012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe29165f5ea39038d!2sBijoy+Shoroni+Restaurant!5e0!3m2!1sen!2sbd!4v1481407735691" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');
                break;
        }
    }

    function chckMsg() {
        var flag = true;
        var name = document.getElementById('name').value;
        name = name.replace(/\s+/g, '');
        if (name == null || name == '') {
            document.getElementById('name_err').style.display='block';
            flag = false;
        } else {
            document.getElementById('name_err').style.display='none';
        }

        var mail = document.getElementById('email').value;
        mail = mail.replace(/\s+/g, '');
        if (mail == null || mail == '') {
            document.getElementById('email_err').style.display='block';
            flag = false;
        } else {
            document.getElementById('email_err').style.display='none';
        }

        var mb = document.getElementById('mobile').value;
        mb = mb.replace(/\s+/g, '');
        if (mb == null || mb == '') {
            document.getElementById('mb_err').style.display='block';
            flag = false;
        } else {
            document.getElementById('mb_err').style.display='none';
        }

        var sub = document.getElementById('subject').value;
        sub = sub.replace(/\s+/g, '');
        if (sub == null || sub== '') {
            document.getElementById('subject_err').style.display='block';
            flag = false;
        } else {
            document.getElementById('subject_err').style.display='none';
        }

        var msg = document.getElementById('message').value;
        msg = msg.replace(/\s+/g, '');
        if (msg == null || msg== '') {
            document.getElementById('msg_err').style.display='block';
            flag = false;
        } else {
            document.getElementById('msg_err').style.display='none';
        }

        return flag;

    }
</script>