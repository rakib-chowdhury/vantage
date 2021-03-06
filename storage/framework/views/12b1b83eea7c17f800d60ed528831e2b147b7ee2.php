<?php $__env->startSection('page_title','Testimonial'); ?>
<?php $__env->startSection('page_header','Testimonial List'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li class="active">Testimonial</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            <?php if(sizeof($testimonial_info)<=($condition[0]->testimonial-1)): ?>
                <div>
                    <a data-toggle="modal" data-target="#addTestimonial" class="btn btn-success btn-rounded">Add
                        Testimonial</a>
                    <hr>
                </div>
                <!-- Modal -->
                <div id="addTestimonial" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <form onsubmit="return chkTestimonial()" action="<?php echo e(url('testimonial/add_post')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="text-align: center">Add Testimonial</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
                                        <span id="commnet_err" style="color: red"></span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Close
                                    </button>
                                    <button type="submit" class="btn btn-success btn-rounded">Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table id="myTable1" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Comment</th>
                        <th style="text-align: center; width: 8%;">Status</th>
                        <th style="text-align: center; width: 8%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($testimonial_info as $key => $u) { ?>
                    <tr>
                        <td style="text-align: center; "><?= $key + 1 ?></td>
                        <td style="text-align: center;"><?= $u['details'] ?></td>
                        <td style="text-align: center; ">
                            <?php if($u['status'] == 1){ ?>
                            <span class="label label-success">Active</span>
                            <?php }else{ ?>
                            <span class="label label-danger">Blocked</span>
                            <?php }
                            ?>
                        </td>
                        <td style="text-align: center; ">
                            <a style="cursor: pointer" data-toggle="modal" data-target="#editTestimonial_<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                            </a>&nbsp;
                            <a href="<?php echo e(url('testimonial/delete')); ?>/<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                            </a>
                            <!-- Modal -->
                            <input type="hidden" name="id" id="tID" >
                            <div id="editTestimonial_<?php echo e($u->id); ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <form onsubmit="return chkTestimonialEdit()" action="<?php echo e(url('testimonial/edit_post')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="modal-content">
                                            <input type="hidden" name="id" id="tID_<?php echo e($u->id); ?>" value="<?php echo e($u->id); ?>">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="text-align: center">Add Testimonial</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <textarea name="comment" id="comment_<?php echo e($u->id); ?>" class="form-control" rows="5"><?php echo e($u->details); ?>

                                                    </textarea>
                                                    <span id="commnet_err_<?php echo e($u->id); ?>" style="color: red"></span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Close
                                                </button>
                                                <button onclick="getVal(<?= $u->id?>)" type="submit" class="btn btn-success btn-rounded">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<script>
    function getVal(id) {
        document.getElementById('tID').value=id;
    }
    function chkTestimonial() {
        var comment = document.getElementById('comment').value;
        shrtnote = comment.replace(/\s+/g, '');
        if (shrtnote == null || shrtnote == '') {
            document.getElementById('commnet_err').innerText = 'This field should have a value';
           return false;
        } else {
            console.log('done');
            document.getElementById('commnet_err').innerText = '';
            return true;
        }
    }
    function chkTestimonialEdit() {
        var id=$('#tID').val();
        var comment = document.getElementById('comment_'+id).value;
        shrtnote = comment.replace(/\s+/g, '');
        if (shrtnote == null || shrtnote == '') {
            document.getElementById('commnet_err_'+id).innerText = 'This field should have a value'; console.log('fgdf');
            return false;
        } else {
            console.log('done');
            document.getElementById('commnet_err_'+id).innerText = '';
            return true;
        }
    }
</script>
<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>