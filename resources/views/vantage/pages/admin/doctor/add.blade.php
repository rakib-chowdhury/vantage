@extends('vantage.layout.main')
@section('page_title','Doctor')
@section('page_header','Add Doctor')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('doctor/show')}}">Doctor</a></li>
        <li class="active">Add Doctor</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkDoc()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('doctor/add_post')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3">Image</label>
                        <input required type="file"
                               class="dropify" name="image"
                               data-default-file="">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Name</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="name" id="name" placeholder="Doctor Name"
                               value="{{old('name')}}">
                        <span id="name_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Contact Number</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="phn" id="phn" placeholder="Contact Number"
                               value="{{old('phn')}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('phn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Profession</label>
                        <input onblur="check_text_field('profession','profession_err')"
                               type="text" required class="form-control"
                               name="profession" id="profession" placeholder="Profession"
                               value="{{old('profession')}}">
                        <span id="profession_err" style="color: red;">
                            @if($errors->has('profession')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Designation</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="designation" id="designation" placeholder="Designation"
                               value="{{old('designation')}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('designation')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Address</label>
                        <input onblur="check_text_field('address','address_err')"
                               type="text" required class="form-control"
                               name="address" id="address" placeholder="Address"
                               value="{{old('address')}}">
							<span id="address_err" style="color: red;">
								@if($errors->has('address')){{'Required'}}@endif
							</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Office</label>
                        <input onblur="check_text_field('office','office_err')"
                               type="text" required class="form-control"
                               name="office" id="office" placeholder="Office"
                               value="{{old('office')}}">
							<span id="office_err" style="color: red;">
								@if($errors->has('office')){{'Required'}}@endif
							</span>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Email</label>
                        <input onblur="check_email(this.id)" onkeyup="check_email(this.id)" type="email" required
                               class="form-control"
                               name="email" id="email" placeholder="Email address"
                               value="{{old('email')}}">
                        <span id="email_err" style="color: red;">
                            @if($errors->has('email')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Facebook</label>
                        <input type="text" class="form-control"
                               name="fb" id="fb" placeholder="Facebook"
                               value="{{old('fb')}}">
                        <span id="fb_err" style="color: red;">
                            @if($errors->has('fb')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Twitter</label>
                        <input type="text" class="form-control"
                               name="twitter" id="twitter" placeholder="Twitter"
                               value="{{old('twitter')}}">
                        <span id="twitter_err" style="color: red;">
                            @if($errors->has('twitter')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Linkedin</label>
                        <input type="text" class="form-control"
                               name="linkedin" id="linkedin" placeholder="Linkedin"
                               value="{{old('linkedin')}}">
                        <span id="linkedin_err" style="color: red;">
                            @if($errors->has('linkedin')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Youtube</label>
                        <input type="text" class="form-control"
                               name="youtube" id="youtube" placeholder="Youtube"
                               value="{{old('youtube')}}">
                        <span id="youtube_err" style="color: red;">
                            @if($errors->has('youtube')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Google Plus</label>
                        <input type="text" class="form-control"
                               name="google" id="google" placeholder="Linkedin"
                               value="{{old('linkedin')}}">
                        <span id="google_err" style="color: red;">
                            @if($errors->has('google')){{'Required'}}@endif
                        </span>
                    </div>
                </div>

                <div class="row">
                    <label for="name" class="control-label">Login Information</label>
                    <br>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name" class="control-label">Password</label>
                            <input type="password" class="form-control"
                                   name="pass" id="pass" placeholder="Password"
                                   value="">
                        <span id="pass_err" style="color: red;">
                            @if($errors->has('pass')){{'Required'}}@endif
                        </span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" class="control-label">Re-submit Password</label>
                            <input type="password" class="form-control"
                                   name="repassword" id="repassword" placeholder="Re-submir Password"
                                   value="">
                        <span id="repassword_err" style="color: red;">
                            @if($errors->has('repassword')){{'Required'}}@endif
                        </span>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="text-align: center">
                    <button id="submitBTN" type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
<script>
    function check_email(id) {
        var tmp = $('#' + id).val();
        //console.log(tmp);

        $.ajax({
            url: '{{url("check_emails")}}',
            method: 'get',
            data: {
                emails: tmp
            },
            success: function (result) {
                console.log(result);
                if (result == 0) {
                    document.getElementById('email_err').innerText = '';
                } else {
                    document.getElementById('email').value = '';
                    document.getElementById('email_err').innerText = '"' + tmp + '" mail address already exists. Please enter another email address.';
                }
            }
        });
    }
    function chkMb(id) {
        var x = document.getElementById(id);
        x.value = x.value.replace(/[^0-9+]/, '');
        //console.log(x.value);
        //console.log(x.value);
    }

    function chkDoc() {
        var flag = true;
        var name = document.getElementById('name').value;
        name = name.replace(/\s+/g, '');
        if (name == null || name == '') {
            document.getElementById('name_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('name_err').innerText = '';
        }
        var phn = document.getElementById('phn').value;
        phn = phn.replace(/\s+/g, '');
        if (phn == null || phn == '') {
            document.getElementById('phn_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('phn_err').innerText = '';
        }
        var profession = document.getElementById('profession').value;
        profession = profession.replace(/\s+/g, '');
        if (profession == null || profession == '') {
            document.getElementById('profession_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('profession_err').innerText = '';
        }
        var designation = document.getElementById('designation').value;
        designation = designation.replace(/\s+/g, '');
        if (designation == null || designation == '') {
            document.getElementById('designation_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('designation_err').innerText = '';
        }
        var address = document.getElementById('address').value;
        address = address.replace(/\s+/g, '');
        if (address == null || address == '') {
            document.getElementById('address_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('address_err').innerText = '';
        }
        var office = document.getElementById('office').value;
        office = office.replace(/\s+/g, '');
        if (office == null || office == '') {
            document.getElementById('office_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('office_err').innerText = '';
        }

        var pass = document.getElementById('pass').value;
        var repass = document.getElementById('repassword').value;
        console.log(pass);
        console.log(repass);
        if (pass == repass) {
            console.log('done')
            $('#password_err').text('');
            $('#repassword_err').text('');
        } else {
            flag = false;
            $('#password_err').text('Password and Re-submit Password does not match');
            $('#repassword_err').text('Password and Re-submit Password does not match');
        }
        return flag;
    }
</script>