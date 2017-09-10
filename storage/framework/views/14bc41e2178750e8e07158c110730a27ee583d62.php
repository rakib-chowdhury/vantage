<div class="top-nav clearfix hidden-xs">
    <div class="container">
        <div class="col-sm-6">
            <ul class="list-inline contact">
                <li><i class="glyphicon glyphicon-earphone"></i> <?php echo e($company[0]->contact); ?></li>
                <li><i class="glyphicon glyphicon-envelope"></i><a
                            href="mailto:<?php echo e($company[0]->mailAddress); ?>"> <?php echo e($company[0]->mailAddress); ?></a></li>
            </ul>
        </div>
        <div class="col-sm-6">
            <ul class="list-unstyled list-inline pull-right">
                <?php if( Session::has('emp_id') ){
                $emailC = Session::get('email');
                $typC = Session::get('type');
                if($typC == 1){ ?>
                <li><a href="<?php echo e(url('myAccount/show')); ?>"><span><i><?php echo e($emailC); ?></i></span></a></li>
                <?php }elseif($typC==2){ ?>
                <li><a href="<?php echo e(url('my_account/show')); ?>"><span><i><?php echo e($emailC); ?></i></span></a></li>
                <?php }
                ?>

                <?php }?>
                <li><a href="<?php echo e($company[0]->facebookLink); ?>"><i class="fa fa-facebook icon-cirlce"></i></a></li>
                <li><a href="<?php echo e($company[0]->googlePlusLink); ?>"><i class="fa fa-google-plus icon-cirlce"></i></a></li>
                <li><a href="<?php echo e($company[0]->youtubeLink); ?>"><i class="fa fa-youtube icon-cirlce"></i></a></li>
                <li><a href="<?php echo e($company[0]->linkedinLink); ?>"><i class="fa fa-linkedin icon-cirlce"></i></a></li>
                <li><a href="<?php echo e($company[0]->twitterLink); ?>"><i class="fa fa-twitter icon-cirlce"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <img style="margin-top:-15px" src="<?php echo e(url('public/images/logo.png')); ?>" alt="logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo e(url('home')); ?>">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo e(url('home#about')); ?>">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo e(url('service')); ?>">SERVICES</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo e(url('treatment')); ?>">TREATMENT</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo e(url('resort')); ?>">RESORTS</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo e(url('gallery')); ?>">GALLERY</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo e(url('contact')); ?>">CONTACT</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>