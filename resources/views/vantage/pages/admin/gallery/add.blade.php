@extends('vantage.layout.main')
@section('page_title','Team')
@section('page_header','Add Team Member')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('team/show')}}">Team</a></li>
        <li class="active">Add Team Member</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkTeam()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('team/add_post')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3">Image</label>
                        <input required type="file"
                               class="dropify" name="image" id="image"
                               data-default-file="">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                        </span>
                    </div>
                </div>
                <div class='row'>
                    <div class="form-group col-md-6">
                        <label for="emp_id" class="control-label">Team Member</label>
                        <select class="form-control select2" name="emp_id"
                                id="emp_id" required>
                            <option value="0">-Select Member-</option>
                            @foreach($employee as $u)
                                @php
                                $addFlag=1;
                                @endphp
                                @foreach($team as $t)
                                    @if($t->id==$u->id)
                                        @php
                                        $addFlag=0;
                                        @endphp
                                    @endif
                                @endforeach
                                @if($addFlag==1)
                                    @if(old('emp_id')==$u->id)
                                        <option selected value="{{$u->id}}">{{$u->name}}</option>
                                    @else
                                        <option value="{{$u->id}}">{{$u->name}}</option>
                                    @endif
                                @endif

                            @endforeach
                        </select>
                        <span id="emp_id_err" style="color: red; ">
                             @if($errors->has('emp_id')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Role</label>
                        <input onblur="check_text_field('role','role_err')"
                               type="text" required class="form-control"
                               name="role" id="role" placeholder="Member Role"
                               value="{{old('role')}}">
                            <span id="role_err" style="color: red;">
                                @if($errors->has('role')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">Short Note</label>
                    <textarea required onkeyup="countLetter()" name="shortNote" id="shortNote" rows="3"
                              class="form-control">{{old('shortNote')}}</textarea>
                    <span style="color: peru">Short Note Should be less than 270 letters.
                        <span id="counter_div" style="color: black" class="pull-right">(0/270 letters)</span>
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
    function chkTeam() {
        var flag = true;
        var emp_id = document.getElementById('emp_id').value;
        emp_id = emp_id.replace(/\s+/g, '');
        if (emp_id == null || emp_id == '' || emp_id == 0) {
            document.getElementById('emp_id_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('emp_id_err').innerText = '';
        }

        var role = document.getElementById('role').value;
        role = role.replace(/\s+/g, '');
        if (role == null || role == '') {
            document.getElementById('role_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('role_err').innerText = '';
        }

        var shrtnote = document.getElementById('shortNote').value;
        shrtnote = shrtnote.replace(/\s+/g, '');
        if (shrtnote == null || shrtnote == '') {
            document.getElementById('shortNote_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('shortNote_err').innerText = '';
        }

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