<?php $__env->startSection('page_title'); ?>
<?php echo e($company[0]->name); ?> | My Account
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_content'); ?>
<!-- Intro Header -->
<header class="others" style="max-height: 50px; padding:20px; background-color: black">
</header>


    
    

<section id="my_account" class="contact-us content-section" style="padding-top: 5px; padding-bottom: 5px;">
    <div class="container">
        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 3px;">
            <div class=" panel col-md-12" style="border-color: black; margin-right: 2px; margin-bottom: 0px;">
                <div class="row">
                    <div class="col-md-12" style="padding: 0px">
                        <div class="col-md-1">
                            <a href="<?php echo e(url('my_account/profile')); ?>">
                                <img style="width: 50px; height: 50px; border-radius: 50%"
                                     src="<?php echo e(url('public/images/emp')); ?>/<?php echo e($account_info[0]->employee->image); ?>"
                                     alt="">
                            </a>
                        </div>
                        <div style="padding-top:10px;" class="col-md-8">
                            <a href="<?php echo e(url('my_account/profile')); ?>">
                                <?php echo e($account_info[0]->employee->name); ?>

                            </a>
                        </div>
                        <div class="col-md-2" style="text-align: right; padding-top: 10px;">
                            <a style="color: #3fa0d0; cursor:pointer" data-toggle="modal"
                               data-target="#myModal_pass" ><i><span>Change Password</span></i></a>
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
                                                  action="<?php echo e(url('doctor/update_password')); ?>" method="post">
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
                                                            style="color:red !important; text-align: left !important;" id="passErr"></p></div>
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
                        </div>
                        <div class="col-md-1" style="text-align: right; padding-top: 10px;">
                            <a style="color: red" href="<?php echo e(url('logout')); ?>"><i><span>Logout</span></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class=" panel col-md-12" style="border-color: black; margin-right: 2px; margin-bottom: 0px;">
                <div class="row">
                    <table class="table table-responsive table-bordered" style="margin-bottom: 2px;">
                        <tr>
                            <td style="width: 25%">
                                Client
                            </td>
                            <td>
                                <span id="msgTitle" style="">Message</span>
                                <a data-toggle="modal" data-target="#newMSG"
                                   style="cursor: pointer; margin-right: 12px;"
                                   data-placement="top" title="New Message" class="pull-right">
                                    <span class="glyphicon glyphicon-edit" data-toggle="tooltip"></span>
                                </a>
                                <div id="newMSG" class="modal fade about-us-modal" data-keyboard="false"
                                     data-backdrop="static" tabindex="-1" role="dialog"
                                     aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <form onsubmit="return chkMSG()" action="<?php echo e(url('message_post')); ?>"
                                              method="post"
                                              enctype="multipart/form-data">
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="sender" value="<?php echo e($account_info[0]->emp_id); ?>">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel" style="color: black">
                                                        New
                                                        Message</h4>
                                                </div>
                                                <div class="modal-body" style="color: black;">


                                                    <div class="row" style="padding:5px;">
                                                        <div class="form-group">
                                                            <label for="name" class="control-label col-md-3"
                                                                   style="text-align:right;">To</label>
                                                            <div class="col-md-9">
                                                                <select name="emp_id" id="emp_id"
                                                                        class="select2 form-control" required>
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
                                                    <button id="submitBTN" type="submit"
                                                            class="btn btn-success">
                                                        Submit
                                                    </button>
                                                    <a href="<?php echo e(url('my_account/show')); ?>" class="btn btn-danger">
                                                        Close
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <a href="<?php echo e(url('my_account/show')); ?>" data-placement="top" title="Refresh"
                                   class="pull-right" style="margin-right:12px;">
                                    <span style="color: cornflowerblue" class="glyphicon glyphicon-repeat"
                                          data-toggle="tooltip"></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                foreach ($client as $key=>$c){
                                    if($key == 0){?>
                                        <input type="hidden" name="fclient" id="fclient" value="<?php echo e($c->id); ?>">
                                        <input type="hidden" name="fclientname" id="fclientname" value="<?php echo e($c->name); ?>">
                                    <?php }
                                    ?>

                                    <a href="javascript:void(0)"
                                       onclick="getMessage('<?=$c->id?>','<?=$c->name?>')">
                                        <img style="padding-left:5px; width:50px; height: 50px; border-radius: 50% " src="<?php echo e(url('public/images/emp/'.$c->image)); ?>"
                                             alt="user-img"
                                             class="img-circle">
                                        <span style="padding-left: 10px;"><?php echo e($c->name); ?></span>
                                    </a>
                                    <br>
                                    <hr>

                                <?php }
                                ?>
                            </td>
                            <td id="msgBlock">

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- /.container -->
    <div id="modal_divs">

    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_script'); ?>
<script>
    getMessage($('#fclient').val(), $('#fclientname').val());
    function getMessage(id, name) {
        document.getElementById('msgTitle').innerText = name + ' message list';
        $.ajax({
            url: '<?php echo e(url("get_message")); ?>/' + id,
            method: 'get',
            dataType: 'json',
            success: function (result) {
                //console.log(result);
                if (result.length == 0) {
                    document.getElementById('msgBlock').innerText = 'No Message Found';
                } else {
                    document.getElementById('msgBlock').innerText = '';
                    var trow = '<div style="max-height: 350px; overflow-y: auto">';
                    trow += '<table class="table table-responsive">';

                    $.each(result, function (i, v) {
                        var mdl = '';
                        console.log(v['sender']['name']);
                        trow += '<tr>';
                        trow += '<td style="width: 6%">';
                        trow += '<img style="width: 30px; height: 30px; border-radius: 50% " src="<?php echo e(url('/public/images/emp/')); ?>/' + v['sender']['image'] + '" alt="">';
                        trow += '</td>';
                        trow += '<td style="width: 20%">';
                        trow += v['sender']['name'];
                        trow += '</td>';
                        trow += '<td style="">';
                        trow += '<a style="cursor: pointer; color: black; font-weight: 300" data-toggle="modal" data-target="#sms_' + v['id'] + '">';
                        if (v['content'].length <= 50) {
                            trow += v['content'];
                        } else {
                            trow += v['content'].replace(v['content'].substring(50, v['content'].length), "....");
                        }
                        trow += '</a>';
                        trow += '</td>';
                        trow += '<td style="width: 5%">';
                        trow += '';
                        trow += '</td>';
                        trow += '<td style="width: 18%">';
                        trow += v['created_at'];
                        trow += '</td>';
                        trow += '</tr>';


                        mdl = '<div id="sms_' + v['id'] + '" class="modal fade about-us-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">' +
                            '<div class="modal-dialog modal-lg" role="document">' +
                            '<div class="modal-content">' +
                            '<div class="modal-header">' +
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
                            '<span aria-hidden="true">&times;</span></button>' +
                            '<h4 class="modal-title" id="myModalLabel" style="color: black">Message Details</h4>' +
                            '</div >' +
                            '<div id = "smsDETAILS" class="modal-body"style = "color: black;" >' +
                            v['content'] +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div> ';
                        $('#modal_divs').append(mdl);
                    });
                    trow += '</table>';
                    trow += '</div>';

                    $('#msgBlock').append(trow);
                }
            }
        });
    }
</script>
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