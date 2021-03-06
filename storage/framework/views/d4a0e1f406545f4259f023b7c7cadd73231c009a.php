<?php $__env->startSection('page_title','Gallery'); ?>
<?php $__env->startSection('page_header','Gallery'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li class="active">Gallery</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            <div>
                <a style="cursor: pointer;" data-toggle="modal" data-target="#addCat"
                   class="btn btn-success btn-rounded">Add Category
                </a>
                
                <a style="cursor: pointer;" data-toggle="modal" data-target="#addSubCat"
                   class="btn btn-success btn-rounded">Add Sub Category
                </a>
                <!-- Modal -->
                <div id="addCat" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <form onsubmit="return chkIMG()" action="<?php echo e(url('gallery/add_cat')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="text-align: center">Add Category</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="emp_id" class="control-label">Category</label>
                                            <input type="text" name="cat_name" id="cat_name" required class="form-control">
                                            <span id="cat_name_err" style="color: red; ">
                                                <?php if($errors->has('cat_name')): ?><?php echo e('Required'); ?><?php endif; ?>
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
                
                 <div id="addSubCat" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <form onsubmit="return chkIMG()" action="<?php echo e(url('gallery/add_sub_cat')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="text-align: center">Add Sub-Category</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="emp_id" class="control-label">Category</label>
                                                <select class="form-control select2" name="cat_id"
                                                         required>
                                                    <?php $__currentLoopData = $gallery_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                    <?php if(old('cat_id')==$u->id): ?>
                                                    <option selected value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
                                                    <?php else: ?>
                                                    <option value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
                                                    <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                                </select>
                                            <span id="cat_name_err" style="color: red; ">
                                                <?php if($errors->has('cat_name')): ?><?php echo e('Required'); ?><?php endif; ?>
                                            </span>
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label for="emp_id" class="control-label">Sub Category</label>
                                            <input type="text" name="sub_cat_name" id="cat_name" required class="form-control">
                                            <span id="cat_name_err" style="color: red; ">
                                                <?php if($errors->has('cat_name')): ?><?php echo e('Required'); ?><?php endif; ?>
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
                
                <a style="cursor: pointer;" data-toggle="modal" data-target="#addPic"
                   class="btn btn-success btn-rounded">Add Gallery Picture</a>
                <!-- Modal -->
                <div id="addPic" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <form onsubmit="return chkIMG()" enctype="multipart/form-data"
                              action="<?php echo e(url('gallery/add_post')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="text-align: center">Add Gallery Picture</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="emp_id" class="control-label">Category</label>
                                            <select class="form-control select2" name="cat_id"
                                                    id="cat_id" required onchange="showSubCategory()">
                                                <option value="0">Select Category</option>
                                                <?php $__currentLoopData = $gallery_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                    <?php if(old('cat_id')==$u->id): ?>
                                                        <option selected value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
                                                    <?php else: ?>
                                                        <option value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                            </select>
                                            <span id="cat_id_err" style="color: red; ">
                                                <?php if($errors->has('cat_id')): ?><?php echo e('Required'); ?><?php endif; ?>
                                            </span>
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label for="emp_id" class="control-label">Sub Category</label>
                                            <select class="form-control select2" id="sub_category" name="sub_cat_id">
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="emp_id" class="control-label">Image</label>
                                            <input required type="file"
                                                   class="dropify" name="image" id="image" onchange="readURL();"
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
                <hr>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Image</th>
                        <th style="text-align: center; ">Category</th>
                        <th style="text-align: center; ">Sub Category</th>
                        <th style="text-align: center; width: 8%;">Status</th>
                        <th style="text-align: center; width: 8%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($gallery_pic as $key => $u) { ?>
                    <tr>
                        <td style="text-align: center; "><?= $key + 1 ?></td>
                        <td style="text-align: center;">
                            <?php if($u->image==null || $u->image==''): ?>
                                <img src="<?php echo e(url('public/images/no_img.png')); ?>" alt="">
                            <?php else: ?>
                                <img style=" width: 120px; height:80px;"
                                     src="<?php echo e(url('public/images/gallery/'.$u->image)); ?>" alt="">
                        <?php endif; ?>
                        <td style="text-align: center;"><?= $u->cat->name ?></td>
                        <td style="text-align: center;"><?= $u->sub_category['sub_cat_name'] ?></td>
                        <td style="text-align: center; ">
                            <?php if($u['status'] == 1){ ?>
                            <span class="label label-success">Active</span>
                            <?php }else{ ?>
                            <span class="label label-danger">Blocked</span>
                            <?php }
                            ?>
                        </td>
                        <td style="text-align: center; ">
                            <a style="cursor: pointer;"  data-toggle="modal" data-target="#editPic_<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Replace"
                                      class="glyphicon glyphicon-edit"></span>
                            </a>&nbsp;
                            <!-- Modal -->
                            <div id="editPic_<?php echo e($u->id); ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <form onsubmit="return chkIMG2()" enctype="multipart/form-data"
                                          action="<?php echo e(url('gallery/edit_post')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="text-align: center">Replace Gallery Picture</h4>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="<?php echo e($u->id); ?>">
                                                <input type="hidden" name="cat_id" value="<?php echo e($u->cat_id); ?>">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="emp_id" class="control-label">Image</label>
                                                        <input required type="file" 
                                                               class="dropify" name="image" id="image" onchange="readURL();"
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
                                                <button type="submit" class="btn btn-success btn-rounded">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <a href="<?php echo e(url('gallery/delete')); ?>/<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('postJquery'); ?>

<?php $__env->stopSection(); ?>


<script>
    function showSubCategory(){
        var cat_id = document.getElementById('cat_id').value;
//        alert(cat_id);
        
        $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: "<?php echo e(url('gallery/get_sub_category')); ?>",
                    type: "post",
                    data: {cat_id:cat_id},
                    success: function(msg) {
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
                    imgWidth = this.width; 
                    imgHeight= this.height;
                    if(imgWidth != 800 && imgHeight!= 800){
                        alert('Image Size Must be 800 x 800');
                        document.getElementById('myBtn').disabled = true;
                    }
                    else{
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
<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>