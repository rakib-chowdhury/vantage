<?php $__env->startSection('page_title','Doctor'); ?>
<?php $__env->startSection('page_header','Edit Doctor'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li><a href="<?php echo e(url('doctor/show')); ?>">Doctor</a></li>
        <li class="active"><span class="glyphicon glyphicon-edit"></span></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkDoc()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="<?php echo e(url('doctor/edit_post')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="id" value="<?php echo e($doctor[0]->id); ?>">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3">Image</label>
                        <input type="hidden" name="isImg" id="isImg" value="0">
                        <input type="file" onclick="chkIMG()" data-show-remove="false"
                               class="dropify" name="image" id="image"
                               data-default-file="<?php echo e(url('public/images/emp/'.$doctor[0]->image)); ?>">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            <?php if($errors->has('image')): ?><?php echo e('Image should be less than 1mb and image should be in jpg,png format.'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Name</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="name" id="name" placeholder="Doctor Name"
                               value="<?php echo e($doctor[0]->name); ?>">
                        <span id="name_err" style="color: red;">
                            <?php if($errors->has('name')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Contact Number</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="phn" id="phn" placeholder="Contact Number"
                               value="<?php echo e($doctor[0]->contact); ?>">
                        <span id="phn_err" style="color: red;">
                            <?php if($errors->has('phn')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Profession</label>
                        <input onblur="check_text_field('profession','profession_err')"
                               type="text" required class="form-control"
                               name="profession" id="profession" placeholder="Profession"
                               value="<?php echo e($doctor[0]->profession); ?>">
                        <span id="profession_err" style="color: red;">
                            <?php if($errors->has('profession')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Designation</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="designation" id="designation" placeholder="Designation"
                               value="<?php echo e($doctor[0]->designation); ?>">
                        <span id="designation_err" style="color: red;">
                            <?php if($errors->has('designation')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Address</label>
                        <input onblur="check_text_field('address','address_err')"
                               type="text" required class="form-control"
                               name="address" id="address" placeholder="Address"
                               value="<?php echo e($doctor[0]->address); ?>">
                        <span id="address_err" style="color: red;">
                            <?php if($errors->has('address')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Office</label>
                        <input onblur="check_text_field('office','office_err')"
                               type="text" required class="form-control"
                               name="office" id="office" placeholder="Office"
                               value="<?php echo e($doctor[0]->office); ?>">
                        <span id="office_err" style="color: red;">
                            <?php if($errors->has('office')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Email</label>
                        <input onblur="check_text_field('email','email_err')"
                               type="email" required class="form-control"
                               name="email" id="email" placeholder="Email address"
                               value="<?php echo e($doctor[0]->mail); ?>">
                        <span id="profession_err" style="color: red;">
                            <?php if($errors->has('email')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Facebook</label>
                        <input type="text" class="form-control"
                               name="fb" id="fb" placeholder="Facebook"
                               value="<?php echo e($doctor[0]->fb); ?>">
                        <span id="fb_err" style="color: red;">
                            <?php if($errors->has('fb')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Twitter</label>
                        <input type="text" class="form-control"
                               name="twitter" id="twitter" placeholder="Twitter"
                               value="<?php echo e($doctor[0]->twitter); ?>">
                        <span id="twitter_err" style="color: red;">
                            <?php if($errors->has('twitter')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Linkedin</label>
                        <input type="text" class="form-control"
                               name="linkedin" id="linkedin" placeholder="Linkedin"
                               value="<?php echo e($doctor[0]->linkedin); ?>">
                        <span id="linkedin_err" style="color: red;">
                            <?php if($errors->has('linkedin')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Youtube</label>
                        <input type="text" class="form-control"
                               name="youtube" id="youtube" placeholder="Youtube"
                               value="<?php echo e($doctor[0]->youtube); ?>">
                        <span id="youtube_err" style="color: red;">
                            <?php if($errors->has('youtube')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Google Plus</label>
                        <input type="text" class="form-control"
                               name="google" id="google" placeholder="Google Plus"
                               value="<?php echo e($doctor[0]->googolePlus); ?>">
                        <span id="google_err" style="color: red;">
                            <?php if($errors->has('google')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
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
        $('#image').attr('required','true');
       // $('#image').removeAttr('data-default-file');
        document.getElementById('isImg').value=1;
    }
    function chkMb(id) {
        var x = document.getElementById(id);
        x.value = x.value.replace(/[^0-9+]/, '');
        //console.log(x.value);
        //console.log(x.value);
    }

    function chkDoc() {
        var flag = true;
        var name = document.getElementById('name').value;
        name = name.replace(/\s+/g, '');
        if (name == null || name == '') {
            document.getElementById('name_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('name_err').innerText = '';
        }
        var phn = document.getElementById('phn').value;
        phn = phn.replace(/\s+/g, '');
        if (phn == null || phn == '') {
            document.getElementById('phn_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('phn_err').innerText = '';
        }
        var profession = document.getElementById('profession').value;
        profession = profession.replace(/\s+/g, '');
        if (profession == null || profession == '') {
            document.getElementById('profession_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('profession_err').innerText = '';
        }
        var designation = document.getElementById('designation').value;
        designation = designation.replace(/\s+/g, '');
        if (designation == null || designation == '') {
            document.getElementById('designation_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('designation_err').innerText = '';
        }
        var address = document.getElementById('address').value;
        address = address.replace(/\s+/g, '');
        if (address == null || address == '') {
            document.getElementById('address_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('address_err').innerText = '';
        }
        var office = document.getElementById('office').value;
        office = office.replace(/\s+/g, '');
        if (office == null || office == '') {
            document.getElementById('office_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('office_err').innerText = '';
        }
        return flag;
    }
</script>
<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>