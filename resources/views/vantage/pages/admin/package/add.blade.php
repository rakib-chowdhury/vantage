@extends('vantage.layout.main')
@section('page_title','Package')
@section('page_header','New Package')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('package/show')}}">Package</a></li>
        <li class="active">New Package</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkPackage()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('package/add_post')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input onblur="check_text_field('name','name_err')"
                           type="text" required class="form-control"
                           name="name" id="name" placeholder="Package Name"
                           value="{{old('name')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('name')){{'Required'}}@endif
                        </span>
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">Short Note</label>
                    <textarea onkeyup="countLetter()" name="shortNote" id="shortNote"
                              class="form-control">{{old('shortNote')}}</textarea>
                    <span style="color: peru">Short Note Should be less than 140 letters.
                        <span id="counter_div" style="color: black" class="pull-right">(0/140 letters)</span>
                    </span><br>
                    <span id="shortNote_err" style="color: red; ">
                        @if($errors->has('shortNote')){{'Required'}}@endif
                    </span>
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">Description</label>
                    <textarea class="summernote" name="description" id="description">{{old('description')}}</textarea>
                    <span id="description_err" style="color: red; ">
                        @if($errors->has('description')){{'Required'}}@endif
                    </span>
                </div>
                <div class="form-group" style="text-align: center">
                    <button id="submitBTN" type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
<script>
    function countLetter() {
        var tmp = $('#shortNote').val();
        tmp = tmp.replace(/\s+/g, '');
        var lngth = tmp.length;
        if (lngth <= 140) {
            var x = document.getElementById('counter_div');
            x.style.color = 'black';
            x.innerText = '(' + lngth + '/140 letters)';
            $('#submitBTN').removeAttr('disabled');
        } else {
            var x = document.getElementById('counter_div');
            x.style.color = 'red';
            x.innerText = '(' + lngth + '/140 letters)';
            $('#submitBTN').attr('disabled', 'true');
        }
    }
    function chkPackage() {
        var flag = true;
        var name = document.getElementById('name').value;
        name = name.replace(/\s+/g, '');
        if (name == null || name == '') {
            document.getElementById('name_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('name_err').innerText = '';
        }

//        var shrtnote = document.getElementById('shortNote').value;
//        shrtnote = shrtnote.replace(/\s+/g, '');
//        if (shrtnote == null || shrtnote == '') {
//            document.getElementById('shortNote_err').innerText = 'This field should have a value';
//            flag = false;
//        } else {
//            document.getElementById('shortNote_err').innerText = '';
//        }

        var des = document.getElementById('description').value;
        des = des.replace(/\s+/g, '');
        des = des.split('&nbsp;').join('');
        if (des == null || des == '' || des == '<p><br></p>' || des == '<p></p>') {
            document.getElementById('description_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('description_err').innerText = '';
        }

        return flag;
    }
</script>