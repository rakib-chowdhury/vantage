<section id="footer-top" class="footer-top content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>OUR LOCATION</h4>
                <?php $__currentLoopData = $company_address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cAddrss): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <ul class="list-unstyled">
                    <li><?php echo e($cAddrss->house_no); ?>,<?php echo e($cAddrss->street_no); ?></li>
                    <li><?php echo e($cAddrss->others); ?><?php echo e($cAddrss->city); ?>,<?php echo e($cAddrss->country); ?></li>
                    <li><?php echo e($cAddrss->phone); ?></li>
                </ul>
                <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                <br>
                <ul class="list-inline social">
                    <li><a href="<?php echo e($company[0]->facebookLink); ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo e($company[0]->googlePlusLink); ?>"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="<?php echo e($company[0]->youtubeLink); ?>"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="<?php echo e($company[0]->linkedinLink); ?>"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="<?php echo e($company[0]->twitterLink); ?>"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- /col -->

            <div class="col-md-4">
                <h4>Support</h4>
                <ul class="list-unstyled">
                    <?php $__currentLoopData = $support_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key90=>$s): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <?php if($s->type==2): ?>
                    <li><a href="<?php echo e(url($s->link)); ?>"><?php echo e($s->name); ?></a></li>                                                   
                    <?php else: ?>
                    <li><a style="cursor: pointer" data-toggle="modal" data-target="#support_<?php echo e($s->id); ?>"><?php echo e($s->name); ?></a>
                        <div id="support_<?php echo e($s->id); ?>" class="modal fade about-us-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel" style="color: black"><?php echo e($s->name); ?></h4>
                                    </div>
                                    <div class="modal-body" style="color: black;">
                                        <?= $s->details ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>						
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        
                        
                    
                    
                    
                </ul>
            </div> <!-- /col -->           

            <div class="col-md-4">
                <h4>Subscribe us</h4>
                <p>Subscribe us to get latest news and information.</p>
                <form action="" class="subscribe">
                    <input type="email" placeholder="E-mail here">
                    <button type="submit" class="btn btn-success">SUBSCRIBE</button>
                </form>
            </div>
        </div> <!-- /row -->
    </div> <!-- /container -->
</section>