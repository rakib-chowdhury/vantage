@extends('vantage.layout.main')
@section('page_title','Edit Support')
@section('page_header','Edit Support')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('support/show')}}">Support</a></li>
        <li class="active"><span class="glyphicon glyphicon-edit"></span></li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkSupport()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('support/edit_post')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$support[0]->id}}">
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input onblur="check_text_field('name','name_err')"
                           type="text" required class="form-control"
                           name="name" id="name" placeholder="Package Name"
                           value="{{$support[0]->name}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('name')){{'Required'}}@endif
                        </span>
                </div>
                @if($support[0]->type==1)
                    <div class="form-group">
                        <label for="description" class="control-label">Description</label>
                    <textarea class="summernote" name="description"
                              id="description">{{$support[0]->details}}</textarea>
                    <span id="description_err" style="color: red; ">
                        @if($errors->has('description')){{'Required'}}@endif
                    </span>
                    </div>
                @endif
                <div class="form-group" style="text-align: center">
                    <button id="submitBTN" type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('postJquery')

@endsection
<script>
    function chkSupport() {
        var flag = true;
        var name = document.getElementById('name').value;
        name = name.replace(/\s+/g, '');
        if (name == null || name == '') {
            document.getElementById('name_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('name_err').innerText = '';
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