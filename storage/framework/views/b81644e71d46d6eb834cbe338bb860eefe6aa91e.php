
<?php $__env->startSection('page_title','Team'); ?>
<?php $__env->startSection('page_header','Edit Team Member'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li><a href="<?php echo e(url('team/show')); ?>">Team</a></li>
        <li class="active"><span class="glyphicon glyphicon-edit"></span></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkTeam()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="<?php echo e(url('team/edit_post')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="id" value="<?php echo e($teams[0]->id); ?>">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3">Image</label>
                        <input type="hidden" name="isImg" id="isImg" value="0">
                        <input onclick="chkIMG()" type="file" data-show-remove="false"
                               class="dropify" name="image" id="image"
                               data-default-file="<?php echo e(url('public/images/team/'.$teams[0]->image)); ?>">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            <?php if($errors->has('image')): ?><?php echo e('Image should be less than 1mb and image should be in jpg,png format.'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class='row'>
                    <div class="form-group col-md-6">
                        <label for="emp_id" class="control-label">Team Member</label>
                        <select readonly class="form-control " name="emp_id"
                                id="emp_id" required>
                            <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <?php if($teams[0]->emp_id==$u->id): ?>
                                    <option selected value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
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
                               value="<?php echo e($teams[0]->role); ?>">
                            <span id="role_err" style="color: red;">
                                <?php if($errors->has('role')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">Short Note</label>
                    <textarea required onkeyup="countLetter()" name="shortNote" id="shortNote" rows="3"
                              class="form-control"><?php echo e($teams[0]->subject); ?></textarea>
                    <span style="color: peru">Short Note Should be less than 270 letters.
                        <span id="counter_div" style="color: black" class="pull-right">(0/270 letters)</span>
                    </span><br>
                    <span id="shortNote_err" style="color: red; ">
                        <?php if($errors->has('shortNote')): ?><?php echo e('Required'); ?><?php endif; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">Description</label>
                    <textarea class="summernote" name="description" id="description"><?php echo e($teams[0]->details); ?></textarea>
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
    function chkIMG() {
        $('#image').attr('required', 'true');
        // $('#image').removeAttr('data-default-file');
        document.getElementById('isImg').value = 1;
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
<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>