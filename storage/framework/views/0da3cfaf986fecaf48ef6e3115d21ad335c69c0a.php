<?php $__env->startSection('page_title'); ?>
    <?php echo e($company[0]->name); ?> | Home
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page_content'); ?>
            <!-- Intro Header -->
    <header class="intro" style="height: 650px;">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h4>Safe and effective</h4>
                        <hr>
                        <h2>TREATMENTS WITHOUT DRUGS OR SURGERY</h2>
                        <hr>
                        <a href="#about" class="btn btn-primary btn-lg page-scroll call-to-action">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section about-us text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <img src="<?php echo e(url('resources/assets/vantage_home/')); ?>/img/about.png"
                     alt="About us picture. Some doctors pictures" class="img-responsive">
                <h2>
                    <span>Story About us</span>
                </h2>
                <p><?php echo e($about_info[0]->subject); ?></p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#aboutUS">LEARN MORE</a>

                <div id="aboutUS" class="modal fade about-us-modal" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Story About Us</h4>
                            </div>
                            <div class="modal-body">
                                <?php echo $about_info[0]->details;?>
                            </div>
                        </div>
                    </div>
                </div> <!-- /modal -->

            </div>
        </div>
    </section>

    <!-- team section -->
    <section id="team" class="team content-section">
        <div class="container">
            <h2 class="text-center"><span>Meet our team</span></h2>
            


            <div id="our-team-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php $__currentLoopData = $team_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$team): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <li data-target="#our-team-carousel" data-slide-to="<?php echo e($key); ?>"
                            class="<?php if($key==0): ?><?php echo e('active'); ?><?php endif; ?>"></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php $__currentLoopData = $team_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$teams): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <div class="item <?php if($key==0): ?><?php echo e('active'); ?><?php endif; ?>">
                            <div class="row">
                                <div class="col-xs-12">
                                    <figure class="clearfix">
                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                            <img class="img-responsive media-object"
                                                 src="<?php echo e(url('public/images/team/')); ?>/<?php echo e($teams->image); ?>">
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <figcaption class="caption">
                                                <p>
                                                    <?php echo e($teams->subject); ?>

                                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                                       data-target="#team-modal_<?php echo e($key); ?>">Read More</a>

                                                </p>
                                                <blockquote class="no-margin">
                                                    <p><?php echo e($teams['employee']['name']); ?></p>
                                                    <small><?php echo e($teams->role); ?></small>
                                                </blockquote>
                                            </figcaption>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div id="team-modal_<?php echo e($key); ?>" class="modal fade team-modal" tabindex="-1"
                             role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content" style="overflow-y: scroll; max-height: 650px;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title"
                                            id="myModalLabel"><?php echo e($teams['employee']['name']); ?></h4>
                                    </div>
                                    <div class="modal-body" >
                                        <?php echo $teams->details;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#our-team-carousel" data-slide="prev"> <span
                            class="glyphicon glyphicon-chevron-left"></span> </a>
                <a class="right carousel-control" href="#our-team-carousel" data-slide="next"> <span
                            class="glyphicon glyphicon-chevron-right"></span> </a>
            </div>
        </div> <!-- /container -->
    </section>


    <!-- Services package -->

    <section id="services" class="content-section services">
        <div class="container">
            <div class="row">
                <h2 class="text-center"><span>Service Packages</span></h2>
                <div class="service-table pricing-three-column col-md-12">
                    <?php $__currentLoopData = $package_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1=>$package): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <div class="plan col-sm-6 col-lg-3">
                            <div class="plan-name-green">
                                <h3><?php echo e($package->name); ?></h3>
                            </div>
                            <ul>
                                <li class="plan-feature" style="min-height: 150px;">
                                    <?php echo e($package->subject); ?>

                                </li>
                                <li class="plan-feature">
                                    <a href="#" class="btn btn-primary btn-plan-select"
                                       data-toggle="modal"
                                       data-target="#service-package-modal_<?php echo e($key1); ?>">
                                        <i class="icon-white icon-ok"></i>Read More</a>
                                </li>
                            </ul>
                        </div>
                        <div id="service-package-modal_<?php echo e($key1); ?>" class="modal fade service-package-modal" tabindex="-1"
                             role="dialog"
                             aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel"><?php echo e($package->name); ?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $package->details;?>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /modal -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </div>
            </div>
            <div class="row" style="text-align:center; margin-top:20px;">
		<button data-toggle="modal"  data-target="#timelineMDL" class="btn btn-primary btn-plan-select">
                      <span class="glyphicon glyphicon-time"> Timeline</span>
                </button>
		<div id="timelineMDL" class="modal fade service-package-modal" tabindex="-1"
                             role="dialog"
                             aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Timeline</h4>
                            </div>
                            <div class="modal-body">
                                <?php echo $timelineINFO[0]->details;?>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </section> <!-- /services -->


    <!-- Testimonials -->

    <section id="testimonial" class="testimonial content-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center"><span>TESTIMONIAL</span></h2>

                <div class="col-md-8 col-md-offset-2">
                    <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="10000">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key5=>$tstmnl): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <li data-target="#fade-quote-carousel" data-slide-to="<?php echo e($key5); ?>"
                                    class="<?php if($key5==0): ?><?php echo e('active'); ?><?php endif; ?>"></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key6=>$tstmnls): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <div class="item <?php if($key6==0): ?><?php echo e('active'); ?><?php endif; ?>">
                                    <div class="profile-circle" style="background-color: rgba(0,0,0,.2);">
                                        <img src="<?php echo e(url('public/images/no_img.png')); ?>" alt="">
                                    </div>
                                    <blockquote>
                                        <p>"<?php echo e($tstmnls->details); ?>"</p>
                                    </blockquote>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->
    </section>

    <!-- Why Choose US -->

    
        
            
                
                    
                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                
            
        
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vantage.layout_home.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>