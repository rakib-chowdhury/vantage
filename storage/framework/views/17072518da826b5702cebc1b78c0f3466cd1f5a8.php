<?php $__env->startSection('page_title'); ?>
    <?php echo e($company[0]->name); ?> | New Client
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page_content'); ?>
            <!-- Intro Header -->
    <header class="others" style="max-height: 50px; padding:20px; background-color: black">
    </header>
    <?php if( Session::has('message') ): ?>
        <div class="panel panel-success col-md-6 col-md-offset-3"
             style="background-color: #329c3b; color: whitesmoke; padding: 7px; text-align:center; min-height:150px;">
            <span class="fa fa-smile-o">Request Send...</span>
        </div>
    <?php else: ?>
        <section id="my_account" class="contact-us content-section" style="padding-top: 5px; padding-bottom: 5px;">
            <div class="container">
                <div class="col-md-8 col-md-offset-2 ">
                    <div class=" panel col-md-12 " style="border-color: black; margin-right: 2px;">
                        <div class="row" style="text-align:center; padding-top:8px;">
                            <h3>Registration</h3>
                        </div>
                        <div class="row">
                            <form onsubmit=" return chkClient()" data-toggle="validator" enctype="multipart/form-data"
                                  id="info" action="<?php echo e(url('client/add_post')); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <div class="row" style="padding:5px;">
                                    <div class="form-group">
                                        <label for="name" class="control-label col-md-3"
                                               style="text-align:right;">Name</label>
                                        <div class="col-md-9">
                                            <input onblur="check_text_field('name','name_err')"
                                                   type="text" required class="form-control"
                                                   name="name" id="name" placeholder="Name"
                                                   value="<?php echo e(old('name')); ?>">
											<span id="name_err" style="color: red;">
												<?php if($errors->has('name')): ?><?php echo e('Required'); ?><?php endif; ?>
											</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding:5px;">
                                    <div class="form-group">
                                        <label for="name" class="control-label col-md-3"
                                               style="text-align:right;">Email</label>
                                        <div class="col-md-9">
                                            <input onkeyup="check_email(this.id)" onblur="check_email(this.id)"
                                                   type="email" required class="form-control"
                                                   name="email" id="email" placeholder="Email address"
                                                   value="<?php echo e(old('email')); ?>">
											<span id="email_err" style="color: red;">
												<?php if($errors->has('email')): ?><?php echo e('Required'); ?><?php endif; ?>
											</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding:5px;">
                                    <div class="form-group">
                                        <label for="name" class="control-label col-md-3" style="text-align:right;">Address</label>
                                        <div class="col-md-9">
                                            <input onblur="check_text_field('address','address_err')"
                                                   type="text" required class="form-control"
                                                   name="address" id="address" placeholder="Address"
                                                   value="<?php echo e(old('address')); ?>">
											<span id="address_err" style="color: red;">
												<?php if($errors->has('address')): ?><?php echo e('Required'); ?><?php endif; ?>
											</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding:5px;">
                                    <div class="form-group">
                                        <label for="name" class="control-label col-md-3" style="text-align:right;">Contact
                                            Number</label>
                                        <div class="col-md-9">
                                            <input onkeyup="chkMb('phn','phn_err')"
                                                   type="text" required class="form-control"
                                                   name="phn" id="phn" placeholder="Contact Number"
                                                   value="<?php echo e(old('phn')); ?>">
											<span id="phn_err" style="color: red;">
												<?php if($errors->has('phn')): ?><?php echo e('Required'); ?><?php endif; ?>
											</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding:5px;">
                                    <div class="form-group">
                                        <label for="name" class="control-label col-md-3" style="text-align:right;">Profession</label>
                                        <div class="col-md-9">
                                            <input onblur="check_text_field('profession','profession_err')"
                                                   type="text" required class="form-control"
                                                   name="profession" id="profession" placeholder="Profession"
                                                   value="<?php echo e(old('profession')); ?>">
											<span id="profession_err" style="color: red;">
												<?php if($errors->has('profession')): ?><?php echo e('Required'); ?><?php endif; ?>
											</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding:5px;">
                                    <div class="form-group">
                                        <label for="name" class="control-label col-md-3"
                                               style="text-align:right;">Image</label>
                                        <div class="col-md-5">
                                            <input onchange="readURL(this);" type="file" required class="form-control"
                                                   name="image" id="image">
                                            <span id="image_err" style="color: red;">
                                                <?php if($errors->has('image')): ?><?php echo e('Required'); ?><?php endif; ?>
                                            </span>
                                        </div>
                                        <div class="col-md-4">
                                            <img id="show_img" src="<?php echo e(url('public/images/no_img.png')); ?>"
                                                 style="width:50px; height:50px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding:5px;">
                                    <label for="name" class="control-label col-md-3">Login Information</label>
                                    <br>
                                    <br>
                                </div>
                                <div class="row" style="padding:5px;">
                                    <div class="form-group">
                                        <label for="name" class="control-label col-md-3" style="text-align:right;">Username</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" readonly
                                                   name="username" id="username" placeholder="Username"
                                                   value="">
                                            <span id="username_err" style="color: red;">
                                                <?php if($errors->has('pass')): ?><?php echo e('Required'); ?><?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding:5px;">
                                    <div class="form-group">
                                        <label for="name" class="control-label col-md-3" style="text-align:right;">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control"
                                                   name="pass" id="pass" placeholder="Password"
                                                   value="">
                                            <span id="pass_err" style="color: red;">
                                                <?php if($errors->has('pass')): ?><?php echo e('Required'); ?><?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding:5px;">
                                    <div class="form-group">
                                        <label for="name" class="control-label col-md-3" style="text-align:right;">Re-submit
                                            Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control"
                                                   name="repassword" id="repassword"
                                                   placeholder="Re-submir Password"
                                                   value="">
                                            <span id="repassword_err" style="color: red;">
                                                <?php if($errors->has('repassword')): ?><?php echo e('Required'); ?><?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" style="text-align: center">
                                    <button id="submitBTN" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- /.container -->
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<script>
    var img_extn = ['png', 'PNG', 'jpg', 'JPG', 'jpeg', 'JPEG'];
    function readURL(input) {
        if (input.files && input.files[0]) {
            var i_name = input.files[0]['name'].split('.');
            var img = false;
            $.each(img_extn, function (i, v) {
                //console .log(v);
                if (i_name[i_name.length - 1] == v) {
                    img = true;
                }
            });
            if (input.files[0]['size'] > 1048576) {///1mb=1048576 bytes
                img = false;
            }
            if (img == false) {
                var x = document.getElementById('image_err');
                x.style.color = 'red';
                x.innerText = 'Image should be png/PNG/jpg/JPG/jpeg/JPEG format and Image should be less than 1mb.';
                document.getElementById('image').value = '';
            } else {
                var x = document.getElementById('image_err');
                x.style.color = 'red';
                x.innerText = '';
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#show_img')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(150);
                };
                var x = document.getElementById('show_img');
                x.style.display = 'block';

                reader.readAsDataURL(input.files[0]);
            }
        }
    }
    function check_email(id) {
        var tmp = $('#' + id).val();
        document.getElementById('username').value=tmp;
        //console.log(tmp);

        $.ajax({
            url: '<?php echo e(url("check_emails")); ?>',
            method: 'get',
            data: {
                emails: tmp
            },
            success: function (result) {
                console.log(result);
                if (result == 0) {

                } else {
                    document.getElementById('email').value = '';
                    document.getElementById('email_err').innerText = '"' + tmp + '" mail address already exists. Please enter another email address.';
                }
            }
        });
    }
    function chkMb(id) {
        var x = document.getElementById(id);
        x.value = x.value.replace(/[^0-9+]/, '');
        //console.log(x.value);
        //console.log(x.value);
    }
    function check_text_field(id, err_id) {
        var tmp_id = $('#' + id).val();
        tmp_id = tmp_id.replace(/\s+/g, '');

        if (tmp_id == '' || tmp_id == null) {
            var x = document.getElementById(err_id);
            x.style.color = 'red';
            x.innerText = 'Required';
        } else {
            document.getElementById(err_id).innerText = '';
        }
    }
    function chkClient() {
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

        var address = document.getElementById('address').value;
        address = address.replace(/\s+/g, '');
        if (address == null || address == '') {
            document.getElementById('address_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('address_err').innerText = '';
        }

        var pass = document.getElementById('pass').value;
        var repass = document.getElementById('repassword').value;
        console.log(pass);
        console.log(repass);
        if (pass == repass) {
            console.log('done');
            $('#password_err').text('');
            $('#repassword_err').text('');
        } else {
            flag = false;
            $('#password_err').text('Password and Re-submit Password does not match');
            $('#repassword_err').text('Password and Re-submit Password does not match');
        }

        return flag;
    }
</script>
<?php echo $__env->make('vantage.layout_home.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>