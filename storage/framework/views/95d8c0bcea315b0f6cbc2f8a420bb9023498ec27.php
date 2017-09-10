<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('vantage.layout_home.headlink', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<input type="hidden" name="base_url" id="base_url" value="<?php echo e(url('/')); ?>">
<!-- Navigation -->
<?php echo $__env->make('vantage.layout_home.headlink', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('vantage.layout_home.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('page_content'); ?>

<?php echo $__env->make('vantage.layout_home.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<footer>
    <p class="text-center">&copy; <?php echo e($company[0]->footerText); ?> <a href="<?php echo e($company[0]->footerLindAddress); ?>"><?php echo e($company[0]->footerLink); ?></a></p>
</footer>
<?php echo $__env->make('vantage.layout_home.footerlink', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('page_script'); ?>
</body>

</html>
