@extends('vantage.layout.main')
@section('page_title','Vip Resort')
@section('page_header','Vip Resort')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Resorts</li>
        <li class="active">Vip Resort</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <input type="hidden" name="id" id="rID" value="{{$resort_info[0]->id}}">
            <div class="form-group">
                <label for="description" class="control-label col-md-12">Short Note
                    <button onclick="updateShortNote()" id="submitBTN" class="pull-right btn btn-rounded btn-inverse">
                        <span data-toggle="tooltip" data-placement="top" title="Short Note Update">Update</span>
                    </button>
                </label>
                    <textarea onkeyup="countLetter()" name="shortNote" id="shortNote" rows="4"
                              class="form-control">{{$resort_info[0]->subject}}</textarea>
                    <span style="color: peru">Short Note Should be less than 270 letters.
                        <span id="counter_div" style="color: black" class="pull-right">(0/270 letters)</span>
                    </span><br>
                    <span id="shortNote_err" style="color: red; ">
                        @if($errors->has('shortNote')){{'Required'}}@endif
                    </span>
            </div>
            <div class="form-group">
                <label for="description" class="control-label col-md-12">Description
                    <button onclick="updateDetails()" class="pull-right btn btn-rounded btn-inverse">
                        <span data-toggle="tooltip" data-placement="top" title="Details Update">Update</span>
                    </button>
                </label>
                    <textarea readonly class="summernote" name="description"
                              id="description">{{$resort_info[0]->details}}</textarea>
                    <span id="description_err" style="color: red; ">
                        @if($errors->has('description')){{'Required'}}@endif
                    </span>
            </div>
            <div class="row col-md-7 col-sm-7 col-lg-7 col-xs-12 " style=" max-height: 500px; overflow-y: scroll;">
                <div class="form-group ">
                    <table class="table table-bordered table-striped table-responsive" style="text-align: center;">
                        <tr>
                            <td style="width: 70%">Image</td>
                            <td>Action</td>
                        </tr>
                        @foreach($resort_pic as $r)
                            <tr>
                                <td>
                                    <img style="width: 120px; height: 80px;"
                                         src="{{url('public/images/vip_resort/'.$r->image)}}" alt="">
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#editPic_<?=$r->id?>" style="cursor: pointer;">
                                        <span style="color: peru" class="glyphicon glyphicon-edit" data-toggle="tooltip"
                                              data-placement="top" title="Replace"></span>
                                    </a>
                                    <!-- Modal -->
                                    <div id="editPic_{{$r->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <form onsubmit="return chkIMG2()" enctype="multipart/form-data" action="{{url('pic/edit_post')}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="picID" value="{{$r->id}}">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title" style="text-align: center">Replace Picture</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <input required type="file"
                                                                       class="dropify" name="image" id="image"
                                                                       data-default-file="">
                                                                <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                                                            <span id="image_err" style="color: red;"><br>
                                                                @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger btn-rounded"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-success btn-rounded">Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    &nbsp;&nbsp;
                                    <a href="{{url('pic/delete/'.$r->id)}}">
                                        <span style="color: red" class="glyphicon glyphicon-trash" data-toggle="tooltip"
                                              data-placement="top" title="Delete"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: center">
                                <button onclick="addPIC()" class="btn btn-rounded btn-success">
                                    Add
                                </button>
                                <!-- Modal -->
                                <div id="addPic" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <form onsubmit="return chkIMG()" enctype="multipart/form-data" action="{{url('pic/add_post')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="type" value="2">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" style="text-align: center">Add Picture</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <input required type="file"
                                                                   class="dropify" name="image" id="image"
                                                                   data-default-file="">
                                                            <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                                                            <span id="image_err" style="color: red;"><br>
                                                            @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-rounded"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-success btn-rounded">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
@endsection
@section('postJquery')
    countLetter();
@endsection
<script>
    function countLetter() {
        var tmp = $('#shortNote').val();
        tmp = tmp.replace(/\s+/g, '');
        var lngth = tmp.length;
        if (lngth <= 270) {
            var x = document.getElementById('counter_div');
            x.style.color = 'black';
            x.innerText = '(' + lngth + '/270 letters)';
            $('#submitBTN').removeAttr('disabled');
        } else {
            var x = document.getElementById('counter_div');
            x.style.color = 'red';
            x.innerText = '(' + lngth + '/270 letters)';
            $('#submitBTN').attr('disabled', 'true');
        }
    }
    function updateShortNote() {
        var flag = true;
        var tmp_id = $('#rID').val();
        var shrtnote = document.getElementById('shortNote').value;
        shrtnote = shrtnote.replace(/\s+/g, '');
        if (shrtnote == null || shrtnote == '') {
            document.getElementById('shortNote_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('shortNote_err').innerText = '';
            var shrtnote = document.getElementById('shortNote').value;
        }
        if (flag) {
            $.ajax({
                url: base_url + '/updateShortNote',
                method: 'get',
                dataType: 'json',
                data: {
                    id: tmp_id,
                    shortNote: shrtnote
                },
                success: function (result) {
                    location.reload();
                }
            });
        }
    }
    function updateDetails() {
        var flag = true;
        var tmp_id = $('#rID').val();
        var des = document.getElementById('description').value;
        des = des.replace(/\s+/g, '');
        des = des.split('&nbsp;').join('');
        if (des == null || des == '' || des == '<p><br></p>' || des == '<p></p>') {
            document.getElementById('description_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('description_err').innerText = '';
            des = document.getElementById('description').value;
        }
        if (flag) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: base_url + '/updateDetails',
                method: 'POST',
                dataType: 'json',
                data: {
                    id: tmp_id,
                    details: des
                },
                success: function (result) {
                    location.reload();
                }
            });
        }
    }
    function addPIC(){
        document.getElementById('image').value='';

        $('#addPic').modal('show');
    }
    function chkIMG() {
        return true;
    }
    function chkIMG2() {
        return true;
    }
</script>