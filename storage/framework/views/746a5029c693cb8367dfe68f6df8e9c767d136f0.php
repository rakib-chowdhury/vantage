
<?php $__env->startSection('page_title','Dashboard'); ?>
<?php $__env->startSection('page_header','Dashboard'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="row row-in">
                    <div class="col-lg-3 col-sm-6 row-in-br">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"><i data-icon="E" class="linea-icon linea-basic"></i>
                                <h5 class="text-muted vb">Today Visitor</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-danger"><?php echo e($visitor[0]->today_visit); ?></h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"><i class="linea-icon linea-basic"
                                                                       data-icon="&#xe01b;"></i>
                                <h5 class="text-muted vb">Total Visitor</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-megna"><?php echo e($visitor[0]->total_visit); ?></h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 row-in-br">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"><i class="linea-icon linea-basic"
                                                                       data-icon="&#xe00b;"></i>
                                <h5 class="text-muted vb">Total Client</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-primary"><?php echo e(sizeof($client)); ?></h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  b-0">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"><i class="linea-icon linea-basic"
                                                                       data-icon="&#xe016;"></i>
                                <h5 class="text-muted vb">Total Doctor</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-success"><?php echo e(sizeof($doctor)); ?></h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Pending Client</h3>
                        <div class="table-responsive" style="max-height: 200px; min-height: 200px; overflow-y: auto">
                            <table id="myTable1"
                                   class="table table-striped color-bordered-table success-bordered-table">
                                <thead>
                                <tr>
                                    <th style="text-align: center; width: 4%;">#</th>
                                    <th style="text-align: center; ">Image</th>
                                    <th style="text-align: center; ">Name</th>
                                    <th style="text-align: center; ">Email</th>
                                    <th style="text-align: center; ">Contact</th>
                                    <th style="text-align: center; ">Profession</th>
                                    <th style="text-align: center; width: 8%;">Status</th>
                                    <th style="text-align: center; width: 12%;">
                                        <span class="glyphicon glyphicon-wrench"></span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($client_pending as $key => $u) { ?>
                                <tr>
                                    <td style="text-align: center; "><?= $key + 1 ?></td>
                                    <td style="text-align: center;">
                                        <img style="width:50px; height:50px; border-radius:50%"
                                             src="<?php echo e(url('public/images/emp/'.$u->image)); ?>">
                                    </td>
                                    <td style="text-align: center;"><?= $u['name'] ?></td>
                                    <td style="text-align: center;"><?= $u['mail'] ?></td>
                                    <td style="text-align: center;"><?= $u['contact'] ?></td>
                                    <td style="text-align: center;"><?= $u['profession'] ?></td>
                                    <td style="text-align: center; ">
                                        <?php if($u['status'] == 1){ ?>
                                        <span class="label label-success">Active</span>
                                        <?php }elseif($u['status'] == 0){ ?>
                                        <span class="label label-danger">Blocked</span>
                                        <?php }elseif($u['status'] == 2){?>
                                        <span class="label label-inverse">Pending</span>
                                        <?php }
                                        ?>
                                    </td>
                                    <td style="text-align: center; ">
                                        <a href="<?php echo e(url('client/status_change/1/')); ?>/<?php echo e($u->id); ?>" class="">
                                <span data-toggle="tooltip" data-placement="top" title="Active this client"
                                      class="label label-success">Active</span>
                                        </a><br><br>
                                        <a href="<?php echo e(url('client/status_change/0/')); ?>/<?php echo e($u->id); ?>" class="">
                                <span data-toggle="tooltip" data-placement="top" title="Blocked this client"
                                      class="label label-danger">Blocked</span>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>