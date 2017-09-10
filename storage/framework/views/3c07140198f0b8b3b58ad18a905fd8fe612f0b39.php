
<?php $__env->startSection('page_title','Edit Service'); ?>
<?php $__env->startSection('page_header','Edit Service'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li><a href="<?php echo e(url('service/show')); ?>">Service</a></li>
        <li class="active"><span class="glyphicon glyphicon-edit"></span></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkService()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="<?php echo e(url('service/edit_post')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="id" value="<?php echo e($services[0]->id); ?>">
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input onblur="check_text_field('name','name_err')"
                           type="text" required class="form-control"
                           name="name" id="name" placeholder="Package Name"
                           value="<?php echo e($services[0]->name); ?>">
                            <span id="name_err" style="color: red;">
                                <?php if($errors->has('name')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">Short Note</label>
                    <textarea onkeyup="countLetter()" name="shortNote" id="shortNote" rows="4"
                              class="form-control"><?php echo e($services[0]->subject); ?></textarea>
                    <span style="color: peru">Short Note Should be less than 270 letters.
                        <span id="counter_div" style="color: black" class="pull-right">(0/270 letters)</span>
                    </span><br>
                    <span id="shortNote_err" style="color: red; ">
                        <?php if($errors->has('shortNote')): ?><?php echo e('Required'); ?><?php endif; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">Description</label>
                    <textarea class="summernote" name="description"
                              id="description"><?php echo e($services[0]->details); ?></textarea>
                    <span id="description_err" style="color: red; ">
                        <?php if($errors->has('description')): ?><?php echo e('Required'); ?><?php endif; ?>
                    </span>
                </div>
                <div class="form-group" style="text-align: center">
                    <button id="submitBTN" type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('postJquery'); ?>
    countLetter();
<?php $__env->stopSection(); ?>
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
    function chkService() {
        var flag = true;
        var name = document.getElementById('name').value;
        name = name.replace(/\s+/g, '');
        if (name == null || name == '') {
            document.getElementById('name_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('name_err').innerText = '';
        }

//        var shrtnote = document.getElementById('shortNote').value;
//        shrtnote = shrtnote.replace(/\s+/g, '');
//        if (shrtnote == null || shrtnote == '') {
//            document.getElementById('shortNote_err').innerText = 'This field should have a value';
//            flag = false;
//        } else {
//            document.getElementById('shortNote_err').innerText = '';
//        }

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