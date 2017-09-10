
<?php $__env->startSection('page_title','Team'); ?>
<?php $__env->startSection('page_header','Add Team Member'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li><a href="<?php echo e(url('team/show')); ?>">Team</a></li>
        <li class="active">Add Team Member</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkTeam()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="<?php echo e(url('team/add_post')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3">Image</label>
                        <input required type="file"
                               class="dropify" name="image" id="image" onchange="readURL()"
                               data-default-file="">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            <?php if($errors->has('image')): ?><?php echo e('Image should be less than 1mb and image should be in jpg,png format.'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class='row'>
                    <div class="form-group col-md-6">
                        <label for="emp_id" class="control-label">Team Member</label>
                        <select class="form-control select2" name="emp_id"
                                id="emp_id" required>
                            <option value="0">-Select Member-</option>
                            <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <?php 
                                $addFlag=1;
                                 ?>
                                <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <?php if($t->id==$u->id): ?>
                                        <?php 
                                        $addFlag=0;
                                         ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                <?php if($addFlag==1): ?>
                                    <?php if(old('emp_id')==$u->id): ?>
                                        <option selected value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
                                    <?php endif; ?>
                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                        <span id="emp_id_err" style="color: red; ">
                             <?php if($errors->has('emp_id')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Role</label>
                        <input onblur="check_text_field('role','role_err')"
                               type="text" required class="form-control"
                               name="role" id="role" placeholder="Member Role"
                               value="<?php echo e(old('role')); ?>">
                            <span id="role_err" style="color: red;">
                                <?php if($errors->has('role')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">Short Note</label>
                    <textarea required onkeyup="countLetter()" name="shortNote" id="shortNote" rows="3"
                              class="form-control"><?php echo e(old('shortNote')); ?></textarea>
                    <span style="color: peru">Short Note Should be less than 270 letters.
                        <span id="counter_div" style="color: black" class="pull-right">(0/270 letters)</span>
                    </span><br>
                    <span id="shortNote_err" style="color: red; ">
                        <?php if($errors->has('shortNote')): ?><?php echo e('Required'); ?><?php endif; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">Description</label>
                    <textarea class="summernote" name="description" id="description"><?php echo e(old('description')); ?></textarea>
                    <span id="description_err" style="color: red; ">
                        <?php if($errors->has('description')): ?><?php echo e('Required'); ?><?php endif; ?>
                    </span>
                </div>
                <div class="form-group" style="text-align: center">
                    <button id="submitBTN" type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
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


<script>
    function readURL() {
       $("#image").change(function (e) {
            var file, img;
            if ((file = this.files[0])) {
                img = new Image();
                img.onload = function () {
                    imgWidth = this.width; 
                    imgHeight= this.height;
                    if(imgWidth != 200 && imgHeight!= 250){
                        alert('Image Size Must be 200 x 250');
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
        
        var _URL = window.URL || window.webkitURL;
    }
    
    </script>
<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>