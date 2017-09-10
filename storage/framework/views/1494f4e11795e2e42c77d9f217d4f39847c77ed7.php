<?php $__env->startSection('page_title'); ?>
    <?php echo e($company[0]->name); ?> | My Account
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page_content'); ?>
            <!-- Intro Header -->
    <header class="others" style="max-height: 50px; padding:20px; background-color: black">
    </header>
    
    
    
    
    
    <section id="my_account" class="contact-us content-section" style="padding-top: 5px; padding-bottom: 5px;">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class=" panel col-md-3 " style="border-color: black; margin-right: 2px;">
                    <div class="row">
                        <div class="col-md-12" style="padding: 0px">
                            <table class="table-responsive table table-bordered" style="margin: 5px; width: 90%">
                                <tr>
                                    <td>
                                        <a href="<?php echo e(url('myAccount/profile')); ?>">
                                            <img style="width: 200px; height: 200px; border-radius: 50%"
                                                 src="<?php echo e(url('public/images/emp')); ?>/<?php echo e($account_info[0]->employee->image); ?>"
                                                 alt="">
                                        </a>
                                    </td>

                                </tr>
                                <tr style="padding-left: 3px;">
                                    <td>
                                        <a href="<?php echo e(url('myAccount/profile')); ?>">
                                            <?php echo e($account_info[0]->employee->name); ?>

                                        </a>
                                    </td>
                                </tr>
                                <tr style="padding-left: 3px;">
                                    <td>
                                        <a style="color:#3fa0d0; cursor:pointer" data-toggle="modal"
                                           data-target="#myModal_pass"><i><span>Change Password</span></i></a>
                                    </td>
                                    <div class="modal fade" id="myModal_pass" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" align="center">
                                                    <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Password Change</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form onsubmit="return checkPass()"
                                                          action="<?php echo e(url('user/update_password')); ?>" method="post">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="row">
                                                            <div class="form-group col-md-12 col-md-offset-0">
                                                                <label for="name" class="col-md-3 control-label"
                                                                       style="text-align: right">New Password</label>
                                                                <div class="col-md-9">
                                                                    <input name="new_pass" id="new_pass" required
                                                                           type="password" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12 col-md-offset-0">
                                                                <label for="name" class="col-md-3 control-label"
                                                                       style="text-align: right">New Password
                                                                    (Confirm)</label>
                                                                <div class="col-md-9">
                                                                    <input name="new_pass_confirm" id="re_pass" required
                                                                           type="password" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12 col-md-offset-0"><p
                                                                        style="color:red !important;" id="passErr"></p></div>
                                                        </div>
                                                        <div class=" form-group" style="text-align: center;">
                                                            <button type="submit" class="btn btn-success">Update
                                                            </button>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <tr style="padding-left: 3px;">
                                    <td>
                                        <a style="color: red" href="<?php echo e(url('logout')); ?>"><i><span>Logout</span></i></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=" panel col-md-8 " style="border-color: black; margin-left: 2px;">
                    <table class="table-responsive table">
                        <tr>
                            <td class="pull-right" style="padding-right: 15px;">
                                <a data-toggle="modal" data-target="#newMSG" style="cursor: pointer;"
                                   data-placement="top" title="New Message">
                                    <span class="glyphicon glyphicon-edit" data-toggle="tooltip"></span>
                                </a>
                                <div id="newMSG" class="modal fade about-us-modal" data-keyboard="false"
                                     data-backdrop="static" tabindex="-1" role="dialog"
                                     aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <form onsubmit="return chkMSG()" action="<?php echo e(url('message/post')); ?>" method="post"
                                              enctype="multipart/form-data">
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="sender" value="<?php echo e($account_info[0]->emp_id); ?>">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel" style="color: black">New
                                                        Message</h4>
                                                </div>
                                                <div class="modal-body" style="color: black;">


                                                    <div class="row" style="padding:5px;">
                                                        <div class="form-group">
                                                            <label for="name" class="control-label col-md-3"
                                                                   style="text-align:right;">To</label>
                                                            <div class="col-md-9">
                                                                <input readonly type="text" required
                                                                       class="form-control"
                                                                       name="name" id="name" placeholder="Name"
                                                                       value="<?php echo e($company[0]->mailAddress); ?>">
                                                                <span id="name_err" style="color: red;">
                                                                    <?php if($errors->has('name')): ?><?php echo e('Required'); ?><?php endif; ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="padding:5px;">
                                                        <div class="form-group">
                                                            <label for="name" class="control-label col-md-3"
                                                                   style="text-align:right;">Message</label>
                                                            <div class="col-md-9">
                                                                <textarea required name="content" id="content"
                                                                          class="form-control"
                                                                          rows="20"></textarea>
                                                                <span id="content_err" style="color: red;">
                                                                    <?php if($errors->has('content')): ?><?php echo e('Required'); ?><?php endif; ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="form-group" style="text-align: center">
                                                    <button id="submitBTN" type="submit" class="btn btn-success">
                                                        Submit
                                                    </button>
                                                    <a href="<?php echo e(url('myAccount/show')); ?>" class="btn btn-danger">
                                                        Close
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td class="pull-right">
                                <a href="<?php echo e(url('myAccount/show')); ?>" data-placement="top" title="Refresh">
                                    <span style="color: cornflowerblue" class="glyphicon glyphicon-repeat"
                                          data-toggle="tooltip"></span>
                                </a>
                            </td>
                        </tr>
                    </table>

                    <div class="row">
                        <div class="col-md-12" style="max-height: 500px; overflow-y: auto">
                            <table class="table-responsive table">
                                <?php
                                if(sizeof($sms) == 0){ ?>
                                <tr>
                                    <td>No Message Found</td>
                                </tr>
                                <?php }else{ ?>

                                <?php foreach($sms as $msg){?>
                                <tr>
                                    <td style="width: 6%">
                                        <?php if($msg->sms_type==3): ?>
                                            <img style="width: 30px; height: 30px; border-radius: 50% "
                                                 src="<?php echo e(url('public/images/emp/'.$account_info[0]->employee->image)); ?>"
                                                 alt="">
                                        <?php else: ?>
                                            <img style="width: 30px; height: 30px; border-radius: 50% "
                                                 src="<?php echo e(url('public/images/'.$company[0]->logo)); ?>"
                                                 alt="">
                                        <?php endif; ?>
                                    </td>
                                    <td style="width: 20%">
                                        <?php if($msg->sms_type==3): ?>
                                            <?php echo e($account_info[0]->employee->name); ?>

                                        <?php else: ?>
                                            <?php echo e($company[0]->name); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td style="">
                                        <a style="cursor: pointer; color: black; font-weight: 300" data-toggle="modal"
                                           data-target="#sms_<?php echo e($msg->id); ?>">
                                            <?php
                                            if (strlen($msg->content) <= 50) {
                                                echo $msg->content;
                                            } else {
                                                echo substr_replace($msg->content, '...', 50);
                                            }
                                            ?>
                                        </a>
                                    </td>
                                    <td style="width: 5%">
                                        <?php
                                        if($msg->is_attached == 1){ ?>
                                        <span class="glyphicon glyphicon-paperclip"></span>
                                        <?php }
                                        ?>

                                    </td>
                                    <td style="width: 18%"><?php echo e($msg->created_at); ?></td>

                                    <div id="sms_<?php echo e($msg->id); ?>" class="modal fade about-us-modal" tabindex="-1"
                                         role="dialog"
                                         aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel" style="color: black">
                                                        Message Details</h4>
                                                </div>
                                                <div class="modal-body" style="color: black;">
                                                    <?= $msg->content?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <?php }?>
                                <?php  }
                                ?>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.container -->
    </section>

<?php $__env->stopSection(); ?>
<script>
    function checkPass() {
        var flag = false;
        var tmpNewP = $('#new_pass').val();
        var tmpReP = $('#re_pass').val();

        if (tmpNewP == tmpReP) {
            flag = true;

        } else {
            $('#passErr').text('New Password and New Password (Confirm) does not match');
        }
        return flag;
    }
</script>
<?php echo $__env->make('vantage.layout_home.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>