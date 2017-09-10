<?php $__env->startSection('page_title','Vip Resort'); ?>
<?php $__env->startSection('page_header','Vip Resort'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
<ol class="breadcrumb">
    <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
    <li class="active">Resorts</li>
    <li class="active">Vip Resort</li>
</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
<div class="col-sm-12">
    <div class="white-box">
        <input type="hidden" name="id" id="rID" value="<?php echo e($resort_info[0]->id); ?>">
        <div class="form-group">
            <label for="description" class="control-label col-md-12">Short Note
                <button onclick="updateShortNote()" id="submitBTN" class="pull-right btn btn-rounded btn-inverse">
                    <span data-toggle="tooltip" data-placement="top" title="Short Note Update">Update</span>
                </button>
            </label>
            <textarea onkeyup="countLetter()" name="shortNote" id="shortNote" rows="4"
                      class="form-control"><?php echo e($resort_info[0]->subject); ?></textarea>
            <span style="color: peru">Short Note Should be less than 270 letters.
                <span id="counter_div" style="color: black" class="pull-right">(0/270 letters)</span>
            </span><br>
            <span id="shortNote_err" style="color: red; ">
                <?php if($errors->has('shortNote')): ?><?php echo e('Required'); ?><?php endif; ?>
            </span>
        </div>
        <div class="form-group">
            <label for="description" class="control-label col-md-12">Description
                <button onclick="updateDetails()" class="pull-right btn btn-rounded btn-inverse">
                    <span data-toggle="tooltip" data-placement="top" title="Details Update">Update</span>
                </button>
            </label>
            <textarea readonly class="summernote" name="description"
                      id="description"><?php echo e($resort_info[0]->details); ?></textarea>
            <span id="description_err" style="color: red; ">
                <?php if($errors->has('description')): ?><?php echo e('Required'); ?><?php endif; ?>
            </span>
        </div>
        <div class="row col-md-8 col-md-push-2 col-sm-8 col-sm-push-0 col-lg-8 col-lg-push-2 col-xs-12 col-xs-push-0" style=" max-height: 500px; overflow-y: scroll;">
            <div class="form-group ">
                <table class="table table-bordered table-striped table-responsive" style="text-align: center;">
                    <tr>
                        <td colspan="4" style="text-align: center">
                            <button onclick="addPIC()" class="btn btn-rounded btn-success">
                                Add
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td style="">Category</td>
                        <td style="">Room Name</td>
                        <td style="">Image</td>
                        <td>Action</td>
                    </tr>
                    <?php $__currentLoopData = $resort_pic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tr>
                        <td>
                            <?php echo $r->resort_cat['resort_cat_name'];?>
                        </td>
                        
                        <td>
                            <?php echo e($r->room_name); ?>

                        </td>
                        <td>
                            <img style="width: 120px; height: 80px;"
                                 src="<?php echo e(url('public/images/vip_resort/'.$r->image)); ?>" alt="">
                        </td>
                        <td>
                            <a data-toggle="modal" data-target="#editPic_<?= $r->id ?>" style="cursor: pointer;">
                                <span style="color: peru" class="glyphicon glyphicon-edit" data-toggle="tooltip"
                                      data-placement="top" title="Replace"></span>
                            </a>
                            <!-- Modal -->
                            <div id="editPic_<?php echo e($r->id); ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <form onsubmit="return chkIMG2()" enctype="multipart/form-data" action="<?php echo e(url('pic/edit_post')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="picID" value="<?php echo e($r->id); ?>">
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
                                                               class="dropify" name="image" id="image1" onchange="readURL1()"
                                                               data-default-file="">
                                                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                                                        <span id="image_err" style="color: red;"><br>
                                                            <?php if($errors->has('image')): ?><?php echo e('Image should be less than 1mb and image should be in jpg,png format.'); ?><?php endif; ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-rounded"
                                                        data-dismiss="modal">Close
                                                </button>
                                                <button type="submit" id="sub_button" class="btn btn-success btn-rounded">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            &nbsp;&nbsp;
                            <a href="<?php echo e(url('pic/delete/'.$r->id)); ?>">
                                <span style="color: red" class="glyphicon glyphicon-trash" data-toggle="tooltip"
                                      data-placement="top" title="Delete"></span>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    
                </table>


                <!-- Modal -->
                <div id="addPic" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <form onsubmit="return chkIMG()" enctype="multipart/form-data" action="<?php echo e(url('pic/add_post')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <!--<input type="hidden" name="type" value="2">-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="text-align: center">Add Picture</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">

                                        <div class="form-group col-md-12">
                                            <label for="cat_id" class="control-label">Type</label>
                                            <select class="form-control select2" id="type" name="type" required onchange="showCategory()">

                                                <option value="0">Select Type</option>
                                                <option value="2">VIP Resort</option>
                                               
                                            </select>
                                            <span id="type_error" style="color: red;display: none;">Select Type</span>
                                            <span id="cat_name_err" style="color: red; ">
                                                <?php if($errors->has('cat_name')): ?><?php echo e('Required'); ?><?php endif; ?>
                                            </span>
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label for="cat_id" class="control-label">Category</label>
                                            <select class="form-control select2" id="category" name="cat_id" required>

                                                <option value="0">Select Category</option>
                                                
                                            </select>
                                            <span id="cat_id_error" style="color: red;display: none;">Select Category</span>
                                            <span id="cat_name_err" style="color: red; ">
                                                <?php if($errors->has('cat_name')): ?><?php echo e('Required'); ?><?php endif; ?>
                                            </span>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="emp_id" class="control-label">Room Name</label>
                                            <input class="form-control" id="name" type="text" name="room_name">
<!--                                                            <span id="room_name_err" style="color: red; ">
                                                <?php if($errors->has('cat_name')): ?><?php echo e('Required'); ?><?php endif; ?>
                                            </span>-->
                                            <span id="room_name_error" style="display: none;color: red;">Input Room Name</span>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="image" class="control-label">Image</label>
                                            <input required type="file"
                                                   class="dropify" name="image" id="image" onchange="readURL()"
                                                   data-default-file="">
                                            <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                                            <span id="image_err" style="color: red;"><br>
                                                <?php if($errors->has('image')): ?><?php echo e('Image should be less than 1mb and image should be in jpg,png format.'); ?><?php endif; ?>
                                            </span>
                                        </div>
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


            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('postJquery'); ?>
countLetter();
<?php $__env->stopSection(); ?>


<script>
    function showCategory(){
        var type = document.getElementById('type').value;
//        alert(type);
        
        $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: "<?php echo e(url('resort/get_category')); ?>",
                    type: "post",
                    data: {type:type},
                    success: function(msg) {
//                            alert(msg);
                    $('#category').html(msg);

                    }
                });
    }
</script>

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
    function addPIC() {
        document.getElementById('image').value = '';

        $('#addPic').modal('show');
    }
    function chkIMG() {
        
        var cat_id = document.getElementById('category').value;
        var room_name = document.getElementById('name').value;
//        alert(cat_id);
        if(cat_id == '0' || cat_id == ''){
            document.getElementById('cat_id_error').style.display = "block";
            return false;
        }
        
         if(room_name == null || room_name == ''){
            document.getElementById('room_name_error').style.display = "block";
            return false;
        }
        
        return true;
    }
    function chkIMG2() {
        return true;
    }
</script>


<script>
    function readURL() {
//        alert('hello');
        $("#image").change(function (e) {
            var file, img;
            if ((file = this.files[0])) {
                img = new Image();
                img.onload = function () {
                    imgWidth = this.width;
                    imgHeight = this.height;
                    if (imgWidth != 800 && imgHeight != 800) {
                        alert('Image Size Must be 800 x 800');
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

<script>
    function readURL1() {
//        alert('hello');
        $("#image1").change(function (e) {
            var file, img;
            if ((file = this.files[0])) {
                img = new Image();
                img.onload = function () {
                    imgWidth = this.width;
                    imgHeight = this.height;
                    if (imgWidth != 800 && imgHeight != 800) {
                        alert('Image Size Must be 800 x 800');
                        document.getElementById('sub_button').disabled = true;
                    }
                    else {
                        document.getElementById('sub_button').disabled = false;
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
<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>