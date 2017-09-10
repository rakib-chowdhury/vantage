<?php $__env->startSection('page_title','Message'); ?>
<?php $__env->startSection('page_header','New Message'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li><a href="<?php echo e(url('message/list')); ?>">Message</a></li>
        <li class="active">New Message</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            <div class="row">
                <form onsubmit="return chkMSG()" action="<?php echo e(url('send_message')); ?>" method="post"
                      enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="row" style="padding:5px;">
                        <div class="form-group">
                            <label for="name" class="control-label col-md-2"
                                   style="text-align:right;">To</label>
                            <div class="col-md-9">
                                <select name="emp_id" id="emp_id" class="select2 form-control" required>
                                    <!--<option value="0">-Select Client-</option>-->
                                    <?php
                                    foreach ($client as $c){ ?>
                                    <option value="<?= $c->id?>"><?= $c->name?></option>
                                    <?php }
                                    ?>
                                </select>
                                <span id="emp_id_err" style="color: red;">
                                    <?php if($errors->has('name')): ?><?php echo e('Required'); ?><?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding:5px;">
                        <div class="form-group">
                            <label for="name" class="control-label col-md-2"
                                   style="text-align:right;">Message</label>
                            <div class="col-md-9">
                                <textarea required name="content" id="content" class="form-control"
                                          rows="15"></textarea>
                                <span id="content_err" style="color: red;">
                                    <?php if($errors->has('content')): ?><?php echo e('Required'); ?><?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center">
                        <button id="submitBTN" type="submit" class="btn btn-success">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="modal_divs">

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('postJquery'); ?>

<?php $__env->stopSection(); ?>

<script>
    function chkMSG() {
        var flag=true;

        var tmp1=$('#emp_id').val();
        if(tmp1=='' || tmp1==null || tmp1==0 ){
            flag=false;
            $('#emp_id_err').text('This field is required');
        }else{
            $('#emp_id_err').text('');
        }

        var tmp1=$('#content').val();
        tmp1=tmp1.replace(/\s+/g, '');
        if(tmp1=='' || tmp1==null ){
            flag=false;
            $('#content_err').text('This field is required');
        }else{
            $('#content_err').text('');
        }

        return flag;
    }
</script>

<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>