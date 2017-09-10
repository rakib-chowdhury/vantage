<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse"
           data-target=".navbar-collapse">
            <i class="ti-menu"></i>
        </a>
        <div class="top-left-part">
            <a class="logo" href="<?php echo e(url('home/dashboard')); ?>">
                <b>
                    <img style="height: 60px; width:60px;" src="<?php echo e(url('public/images/'.$company[0]->logo)); ?>" alt="Logo"/>
                </b>
                <span class="hidden-xs">
                    <?php echo e($company[0]->name); ?>

                </span>
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown"><a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <i
                        class="fa fa-user"></i>&nbsp<b class="hidden-xs">Admin</b> </a>
                <ul class="dropdown-menu dropdown-user scale-up">
                    <!--<li><a href="#" data-toggle="modal" data-target="#myModal_view"><i class="ti-user"></i> Profile </a>
                    </li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal_edit"><i class="ti-wallet"></i> Edit profile</a></li>-->
                    <li role="separator" class="divider"></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal_pass"><i class="ti-settings"></i>Change password</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo e(url('logout')); ?>"></i>Log-out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<div class="modal fade" id="myModal_pass" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Password Change</h4>
            </div>
            <div class="modal-body">
                <form  onsubmit="return checkPass()" action="<?php echo e(url('admin/update_password')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="row">                        
                        <div class="form-group col-md-12 col-md-offset-0">
                            <label for="name" class="col-md-3 control-label" style="text-align: right">New Password</label>
                            <div class="col-md-9">
                                <input name="new_pass" id="new_pass" required type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-md-offset-0">
                            <label for="name" class="col-md-3 control-label" style="text-align: right">New Password (Confirm)</label>
                            <div class="col-md-9">
                                <input name="new_pass_confirm" id="re_pass" required type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-md-offset-0"><p style="color:red;" id="passErr"></p></div>
                    </div>
                    <div class=" form-group" style="text-align: center;">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>