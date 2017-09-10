@extends('vantage.layout.main')
@section('page_title','Company')
@section('page_header','Edit Company')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Company</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkCmp()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('company/edit_post')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$company[0]->id}}">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3">Logo</label>
                        <input type="hidden" name="isImg" id="isImg" value="0">
                        <input type="file" onclick="chkIMG()" data-show-remove="false"
                               class="dropify" name="image" id="image" onchange="readURL();"
                               data-default-file="{{url('public/images/'.$company[0]->logo)}}">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                        </span>
                    </div>
                </div>
                <!--name,title-->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Name</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" readonly class="form-control"
                               name="name" id="name" placeholder="Doctor Name"
                               value="{{$company[0]->name}}">
                        <span id="name_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Title</label>
                        <input onblur="check_text_field('title','title_err')"
                               type="text" readonly class="form-control"
                               name="title" id="title" placeholder="Title Name"
                               value="{{$company[0]->headerTitle}}">
                        <span id="name_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <!--contact,website-->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Contact Number</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="phn" id="phn" placeholder="Contact Number"
                               value="{{$company[0]->contact}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('phn')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Website</label>
                        <input onkeyup="check_text_field('website','website_err')"
                               type="text" required class="form-control"
                               name="website" id="website" placeholder="website"
                               value="{{$company[0]->website}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('phn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <!--email,fb-->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Email</label>
                        <input onblur="check_text_field('email','email_err')"
                               type="email" required class="form-control"
                               name="email" id="email" placeholder="Email address"
                               value="{{$company[0]->mailAddress}}">
                        <span id="profession_err" style="color: red;">
                            @if($errors->has('email')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Facebook</label>
                        <input type="text" class="form-control"
                               name="fb" id="fb" placeholder="Facebook"
                               value="{{$company[0]->facebookLink}}">
                        <span id="fb_err" style="color: red;">
                            @if($errors->has('fb')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <!--twitter,linkedin-->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Twitter</label>
                        <input type="text" class="form-control"
                               name="twitter" id="twitter" placeholder="Twitter"
                               value="{{$company[0]->twitterLink}}">
                        <span id="twitter_err" style="color: red;">
                            @if($errors->has('twitter')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Linkedin</label>
                        <input type="text" class="form-control"
                               name="linkedin" id="linkedin" placeholder="Linkedin"
                               value="{{$company[0]->linkedinLink}}">
                        <span id="linkedin_err" style="color: red;">
                            @if($errors->has('linkedin')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <!--youtube,googleplus-->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Youtube</label>
                        <input type="text" class="form-control"
                               name="youtube" id="youtube" placeholder="Youtube"
                               value="{{$company[0]->youtubeLink}}">
                        <span id="youtube_err" style="color: red;">
                            @if($errors->has('youtube')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Google Plus</label>
                        <input type="text" class="form-control"
                               name="google" id="google" placeholder="Google Plus"
                               value="{{$company[0]->googlePlusLink}}">
                        <span id="google_err" style="color: red;">
                            @if($errors->has('google')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <!--address-->
                {{--<div class="row">--}}
                    {{--<div class="form-group col-md-6">--}}
                        {{--<label for="name" class="control-label">Address</label>--}}
                        {{--<input onblur="check_text_field('address','address_err')"--}}
                               {{--type="text" required class="form-control"--}}
                               {{--name="address" id="address" placeholder="Address"--}}
                               {{--value="{{$companyAdd[0]->name}}">--}}
                        {{--<span id="address_err" style="color: red;">--}}
                            {{--@if($errors->has('address')){{'Required'}}@endif--}}
                        {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="form-group" style="text-align: center">
                    <button id="submitBTN" type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
<script>
    function chkIMG() {
        $('#image').attr('required','true');
        // $('#image').removeAttr('data-default-file');
        document.getElementById('isImg').value=1;
    }
    function chkMb(id) {
        var x = document.getElementById(id);
        x.value = x.value.replace(/[^0-9+]/, '');
        //console.log(x.value);
        //console.log(x.value);
    }

    function chkCmp() {
        var flag = true;
        var phn = document.getElementById('phn').value;
        phn = phn.replace(/\s+/g, '');
        if (phn == null || phn == '') {
            document.getElementById('phn_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('phn_err').innerText = '';
        }

//        var address = document.getElementById('address').value;
//        address = address.replace(/\s+/g, '');
//        if (address == null || address == '') {
//            document.getElementById('address_err').innerText = 'This field should have a value';
//            flag = false;
//        } else {
//            document.getElementById('address_err').innerText = '';
//        }
        var website = document.getElementById('website').value;
        website = website.replace(/\s+/g, '');
        if (website == null || website == '') {
            document.getElementById('website_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('website_err').innerText = '';
        }

        return flag;
    }
</script>


<script>
    function readURL() {
       $("#image").change(function (e) {
            var file, img;
            if ((file = this.files[0])) {
                img = new Image();
                img.onload = function () {
                    imgWidth = this.width; 
                    imgHeight= this.height;
                    if(imgWidth != 125 && imgHeight!= 50){
                        alert('Image Size Must be 125 x 50');
                        document.getElementById('submitBTN').disabled = true;
                    }
                    else{
                        document.getElementById('submitBTN').disabled = false;
                    }
                    
                };
                img.onerror = function () {
                    alert("not a valid file: " + file.type);
                };
                img.src = _URL.createObjectURL(file);
            }

        });
    }
    
        var _URL = window.URL || window.webkitURL;

        
    </script>