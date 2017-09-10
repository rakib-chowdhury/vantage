@extends('vantage.layout.main')
@section('page_title','Resort Category')
@section('page_header','Resort Category')
@section('page_breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
    <li class="active">Resort Category</li>
</ol>
@endsection

@section('page_content')
<div class="col-sm-12">
    <div class="white-box">
        <div>
            <a style="cursor: pointer;" data-toggle="modal" data-target="#addCat"
               class="btn btn-success btn-rounded">Add Category
            </a>
            <!-- Modal -->
            <div id="addCat" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <form onsubmit="return formValidate()" action="{{url('resort/add_cat')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close"
                                        data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="text-align: center">Add Category</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="emp_id" class="control-label">Type</label>
                                        <select class="form-control select2" id="type" name="type" required>
                                            <option value="0">Select Category Type</option>
                                            <option value="1">Resort</option>
                                            <option value="2">VIP Resort</option>
                                            <option value="3">Resort Service</option>
                                        </select>
                                        <span id="type_error" style="color: red;display: none;">Select Category Type</span>
                                        <span id="cat_name_err" style="color: red; ">
                                            @if($errors->has('cat_name')){{'Required'}}@endif
                                        </span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="emp_id" class="control-label">Category</label>
                                        <input type="text" name="cat_name" id="cat_name" required class="form-control">
                                        <span id="cat_name_error" style="color: red;display: none;">Select Category</span>
                                        <span id="cat_name_err" style="color: red; ">
                                            @if($errors->has('cat_name')){{'Required'}}@endif
                                        </span>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="description" class="control-label col-md-12">Description</label>
                                        <textarea readonly class="summernote" name="description"
                                                  id="description"></textarea>
                                        <span id="description_error" style="display: none;color: red">Add Description</span>
                                        <span id="description_err" style="color: red; ">
                                            @if($errors->has('description')){{'Required'}}@endif
                                        </span>
                                    </div>  
                                    
                                    <div class="form-group col-md-12">
                                        <label for="Image" class="control-label">Image</label>
                                        <input required type="file"
                                               class="dropify" name="image" id="image" onchange="readURL()"
                                               data-default-file="">
                                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                                        <span id="image_err" style="color: red;"><br>
                                            @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                                        </span>
                                    </div>-->

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-rounded"
                                        data-dismiss="modal">Close
                                </button>
                                <button type="submit" id="myBtn" class="btn btn-success btn-rounded">Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <hr>
        </div>
        <div class="table-responsive">
            <table id="myTable" class="table table-striped color-bordered-table success-bordered-table">
                <thead>
                    <tr>
                        <th style="text-align: center;">#</th>
                        <th style="text-align: center; ">Category</th>
                        <th style="text-align: center; ">Type</th>
                        <!--<th style="text-align: center; ">Image</th>-->
                        <th style="text-align: center;">Status</th>
                        <th style="text-align: center;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    if ($resort_category) {
                        foreach ($resort_category as $row) {
                            ?>
                            <tr>
                                <td style="text-align: center; "><?= $i; ?></td>

                                <td style="text-align: center;"><?= $row->resort_cat_name ?></td>
                                <td style="text-align: center;">
                                    <?php if($row->type == 1){
                                        echo 'Resort';
                                    }
                                        else if($row->type == 2){
                                            echo 'VIP Resort';
                                        }
                                        else if($row->type == 3){echo 'Resort Service';}
                                        else{echo 'No Type';}?>
                                </td>
                                <!--<td style="text-align: center;">
                                    <img style="width: 120px;" src="{{url('public/images/resort_category/'.$row->cat_image)}}" alt="">
                                 
                                </td>-->
                                <td style="text-align: center; ">
                                    <?php if ($row->status == 1) { ?>
                                        <span class="label label-success">Active</span>
                                    <?php } else { ?>
                                        <span class="label label-danger">Blocked</span>
        <?php }
        ?>
                                </td>
                                <td style="text-align: center; ">
                                    <a style="cursor: pointer;" href="edit_category/<?php echo $row->id?>">
                                        <span data-toggle="tooltip" data-placement="top" title="Replace"
                                              class="glyphicon glyphicon-edit"></span>
                                    </a>&nbsp;
                                    
                                    <a href="{{url('resort/delete_resort_cat')}}/{{$row->id}}">
                                        <span data-toggle="tooltip" data-placement="top" title="Delete"
                                              style="color: red" class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection

@section('postJquery')

@endsection


<script>
    
    function formValidate(){
        var type = document.getElementById('type').value;
        var cat_name = document.getElementById('cat_name').value;
        var description = document.getElementById('description').value;
        //alert(description);
        if(type == '0' || type == null){
            document.getElementById('type_error').style.display = "block";
            return false;
        }
        
        if(cat_name == '' || cat_name == null){
            document.getElementById('cat_name_error').style.display = "block";
            return false;
        }
        
        /*if(description == '' || description == null || description == '<p><br></p>'){
            document.getElementById('description_error').style.display = "block";
            return false;
        }*/
    }
    
</script>


<script>
    function showSubCategory() {
        var cat_id = document.getElementById('cat_id').value;
//        alert(cat_id);

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{url('gallery/get_sub_category')}}",
            type: "post",
            data: {cat_id: cat_id},
            success: function (msg) {
//                            alert(msg);
                $('#sub_category').html(msg);

            }
        });
    }
</script>

<script>
    function readURL() {
        $("#image").change(function (e) {
            var file, img;
            if ((file = this.files[0])) {
                img = new Image();
                img.onload = function () {
//                    imgWidth = this.width;
                    imgHeight = this.height;
                    if ( imgHeight != 30) {
                        alert('Image Height Must be 30');
                        document.getElementById('myBtn').disabled = true;
                    }
                    else {
                        document.getElementById('myBtn').disabled = false;
                    }

                };
                img.onerror = function () {
                    alert("not a valid file: " + file.type);
                };
                img.src = _URL.createObjectURL(file);
            }

        });

        var _URL = window.URL || window.webkitURL;
    }

</script>