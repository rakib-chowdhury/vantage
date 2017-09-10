<?php $__env->startSection('page_title','Resort Category'); ?>
<?php $__env->startSection('page_header','Resort Category'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
<ol class="breadcrumb">
    <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
    <li class="active">Resort Category</li>
</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
<div class="col-sm-12">
    <div class="white-box">
        <form onsubmit="return formValidate()" action="<?php echo e(url('resort/update_cat')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>           
                    
                
                    <input type="hidden" name="id" value="<?php echo $all_category->id?>">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="emp_id" class="control-label">Type</label>
                            <select class="form-control select2" id="type" name="type" required>
                                <option value="0">Select Category Type</option>
                                <option <?php if($all_category->type == 1){echo 'selected';} ?> value="1">Resort</option>
                                <option <?php if($all_category->type == 2){echo 'selected';} ?> value="2">VIP Resort</option>
                                <option <?php if($all_category->type == 3){echo 'selected';} ?> value="3">Resort Service</option>
                            </select>
                            <span id="type_error" style="color: red;display: none;">Select Category Type</span>
                            <span id="cat_name_err" style="color: red; ">
                                <?php if($errors->has('cat_name')): ?><?php echo e('Required'); ?><?php endif; ?>
                            </span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emp_id" class="control-label">Category</label>
                            <input type="text" name="cat_name" id="cat_name" value="<?php echo $all_category->resort_cat_name?>" required class="form-control">
                            <span id="cat_name_error" style="color: red;display: none;">Select Category</span>
                            <span id="cat_name_err" style="color: red; ">
                                <?php if($errors->has('cat_name')): ?><?php echo e('Required'); ?><?php endif; ?>
                            </span>
                        </div>

                        <!-- <div class="form-group">
                            <label for="description" class="control-label col-md-12">Description</label>
                            <textarea readonly class="summernote" name="description" id="description"><?php echo $all_category->cat_description?></textarea>

                            <span id="description_error" style="display: none;color: red">Add Description</span>
                            <span id="description_err" style="color: red; ">
                                <?php if($errors->has('description')): ?><?php echo e('Required'); ?><?php endif; ?>
                            </span>
                        </div> 

                        <div class="form-group col-md-12">
                            <label for="Image" class="control-label">Image</label>
                            <input type="file" class="dropify" name="image" id="image" onchange="readURL()"
                                   data-show-remove="false" data-default-file="<?php echo e(url('public/images/resort_category/'.$all_category->cat_image)); ?>">
                            <input type="hidden" name="image" value="<?php echo $all_category->cat_image?>">
                            <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                            <span id="image_err" style="color: red;"><br>
                                <?php if($errors->has('image')): ?><?php echo e('Image should be less than 1mb and image should be in jpg,png format.'); ?><?php endif; ?>
                            </span>
                        </div>-->

                    <button type="submit" id="myBtn" class="btn btn-success btn-rounded">Edit
                    </button>
              
            </div>
        </form>
    </div>
</div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('postJquery'); ?>

<?php $__env->stopSection(); ?>


<script>

    function formValidate() {
        var type = document.getElementById('type').value;
        var cat_name = document.getElementById('cat_name').value;
        var description = document.getElementById('description').value;
        //alert(description);
        if (type == '0' || type == null) {
            document.getElementById('type_error').style.display = "block";
            return false;
        }

        if (cat_name == '' || cat_name == null) {
            document.getElementById('cat_name_error').style.display = "block";
            return false;
        }

        /*if (description == '' || description == null || description == '<p><br></p>') {
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
            url: "<?php echo e(url('gallery/get_sub_category')); ?>",
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
                    if (imgHeight != 30) {
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
<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>