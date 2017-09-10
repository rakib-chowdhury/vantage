<?php $__env->startSection('page_title'); ?>
    <?php echo e($company[0]->name); ?> | Resorts
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page_content'); ?>

   <!-- Intro Header -->

    <section style="height: 650px;" id="resorts" class="resorts content-section">
        <div class="container">
            <div class="row nav" style="margin-top: 200px;">
                <div class="col-lg-3 col-lg-offset-3 col-sm-6 text-center">
                    <a class="page-scroll" href="#about-resort">About Resorts</a>
                </div>
                <div class="col-lg-3 col-sm-6 text-center">
                    <a class="page-scroll" href="#vip-resort">VIP Resorts</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about-resort" class="about-resort content-section" style="background:white">
        <div class="container">
            <div class="row">

                <h2 class="text-center"><span>About Resort</span></h2>
                <p class="text-center">
                    <?php echo e($resort_info[0]->subject); ?>

                    <br>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#about-resort-modal">Learn
                        More</a>
                </p>

                <div id="about-resort-modal" class="modal fade about-resort-modal" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">About Resort</h4>
                            </div>
                            <div class="modal-body">
                                <?=$resort_info[0]->details?>
                            </div>
                        </div>
                    </div>
                </div> <!-- /modal -->
                <?php $__currentLoopData = $resort_pic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rpic): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <div class="col-lg-3 col-md-3 col-xs-6 about-resort-img">
                        <a class="" href="<?php echo e(url('public/images/resort/')); ?>/<?php echo e($rpic->image); ?>"
                           data-lightbox="about-resort"
                           data-title="Click the right half of the image to move forward.">
                            <img style="width: 100%; height: 100%" class="img-responsive"
                                 src="<?php echo e(url('public/images/resort/')); ?>/<?php echo e($rpic->image); ?>"
                                 alt=""/>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

            </div>
        </div>
    </section>

    <section id="vip-resort" class="vip-resort content-section" style="background:rgba(238, 238, 238, 0.71)">
        <div class="container">
            <div class="row">

                <h2 class="text-center"><span>VIP Resort</span></h2>
                <p class="text-center">
                    <?php echo e($vip_resort_info[0]->subject); ?>

                    <br>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#vip-resort-modal">Learn
                        More</a>
                </p>

                <div id="vip-resort-modal" class="modal fade vip-resort-modal" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">VIP Resort</h4>
                            </div>
                            <div class="modal-body">
                                <?php echo e($vip_resort_info[0]->details); ?>

                            </div>
                        </div>
                    </div>
                </div> <!-- /modal -->

                <?php $__currentLoopData = $vip_resort_pic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rpic): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <div class="col-lg-3 col-md-3 col-xs-6 about-resort-img">
                        <a class="" href="<?php echo e(url('public/images/vip_resort/')); ?>/<?php echo e($rpic->image); ?>"
                           data-lightbox="about-resort"
                           data-title="Click the right half of the image to move forward.">
                            <img style="width: 100%; height: 100%" class="img-responsive"
                                 src="<?php echo e(url('public/images/vip_resort/')); ?>/<?php echo e($rpic->image); ?>"
                                 alt=""/>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </div>
        </div>
    </section>

    <section id="other" class="about-resort content-section" style="background:white">
        <div class="container">
            <div class="row">

                <h2 class="text-center"><span>Other Facilities</span></h2>
                <p class="text-center">
                    <?php echo e($other_facility_info[0]->subject); ?>

                    <br>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#orher-resort-modal">Learn
                        More</a>
                </p>

                <div id="orher-resort-modal" class="modal fade about-resort-modal" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Other Facilities</h4>
                            </div>
                            <div class="modal-body">
                                <?=$other_facility_info[0]->details?>
                            </div>
                        </div>
                    </div>
                </div> <!-- /modal -->
                <?php $__currentLoopData = $other_pic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rpic): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <div class="col-lg-3 col-md-3 col-xs-6 about-resort-img">
                        <a class="" href="<?php echo e(url('public/images/resort/')); ?>/<?php echo e($rpic->image); ?>"
                           data-lightbox="about-resort"
                           data-title="Click the right half of the image to move forward.">
                            <img style="width: 100%; height: 100%" class="img-responsive"
                                 src="<?php echo e(url('public/images/other/')); ?>/<?php echo e($rpic->image); ?>"
                                 alt=""/>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vantage.layout_home.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>