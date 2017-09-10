<?php $__env->startSection('page_title','Message'); ?>
<?php $__env->startSection('page_header','Message List'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li class="active">Message</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            <!-- .chat-row -->
            <div class="chat-main-box">
                <table class="table table-responsive table-bordered">
                    <tr>
                        <td style="width: 20%">
                            Client
                        </td>
                        <td>
                            <span id="msgTitle" style="">Message</span>
                            <a href="<?php echo e(url('new_message/new')); ?>" class="pull-right btn btn-info btn-rounded" style="text-align: right;padding-right: 10px;"><span>New Message</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            foreach ($client as $key=>$c){
                            if($key==0){?>
                            <input type="hidden" name="fclient" id="fclient" value="<?php echo e($c->id); ?>">
                            <input type="hidden" name="fclientname" id="fclientname" value="<?php echo e($c->name); ?>">
                            <?php }
                            ?>

                            <a href="javascript:void(0)"
                               onclick="getMessage('<?=$c->id?>','<?=$c->name?>')">
                                <img style="padding-left:5px; width: 50px; height: 50px; border-radius: 50%; " src="<?php echo e(url('public/images/emp/'.$c->image)); ?>"
                                     alt="user-img"
                                     class="img-circle">
                                <span style="padding-left: 10px;"><?php echo e($c->name); ?></span>                                
                            </a>
                            <a href="<?php echo e(url('admin/reply/'.$c->id)); ?>">
                                <span class="pull-right" style="padding-top: 40px;font-size: 11px;color: brown">Reply</span>
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
            <!-- /.chat-row -->
        </div>
    </div>


    <div id="modal_divs">

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('postJquery'); ?>
    getMessage($('#fclient').val(),$('#fclientname').val());
    <?php $__env->stopSection(); ?>
            <!--hello-->
    <script>
        function getMessage(id, name) {
            document.getElementById('fclient').value=id;
            var tmp = $('#' + id).val();
            //console.log(tmp);
            document.getElementById('msgTitle').innerText = name + ' message list';
            $.ajax({
                url: base_url + '/get_message/' + id,
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
                            trow += '<img style="width: 30px; height: 30px; border-radius: 50% " src="' + base_url + '/public/images/emp/' + v['sender']['image'] + '" alt="">';
                            trow += '</td>';
                            trow += '<td style="width: 20%">';
                            trow += v['sender']['name'];                            
                            trow += '</td>';
                            trow += '<td style="">';
                            trow += '<a style="cursor: pointer; color: black; font-weight: 300" data-toggle="modal" data-target="#sms_'+v['id']+'">';
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


                            mdl = '<div id="sms_'+v['id']+'" class="modal fade about-us-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">' +
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

<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>