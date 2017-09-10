
<?php $__env->startSection('page_title'); ?>
    <?php echo e($company[0]->name); ?> | Service
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page_content'); ?>
            <!-- Intro Header -->
    <header class="intro others" style="height: 650px;">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <hr>
                        <h2>Services</h2>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php 
    $serviceID=array('cryolipolysis-services','far-services','foot-services','microvibrations-services','alkaline-services');
    $serviceCLASS=array('cryolipolysis-service','far-service','foot-service','microvibrations-service','alkaline-service');
     ?>
    <?php $__currentLoopData = $service_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=>$service): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <section id="<?php echo e($serviceID[$key2]); ?>" class="<?php echo e($serviceCLASS[$key2]); ?> content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 <?php if(($key2%2)==0): ?><?php echo e('col-md-offset-8'); ?><?php endif; ?>">
                        <div class="description" >
                            <h2><?php echo e($service->name); ?></h2>
                            <p><?php echo e($service->subject); ?>

                                <button class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal_<?php echo e($key2); ?>">Learn More
                                </button>

                            </p>
                        </div>
                    </div>
                    <div id="modal_<?php echo e($key2); ?>" class="modal fade cryolipolysis-service-modal" tabindex="-1" role="dialog"
                         aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><?php echo e($service->name); ?></h4>
                                </div>
                                <div class="modal-body">
                                    <?php echo $service->details;?>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /modal -->
                </div>
            </div>
        </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vantage.layout_home.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>