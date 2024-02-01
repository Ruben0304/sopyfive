<div class="slider-active dot-style">
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="single-slider d-flex align-items-center slider-height">

            <div class="container">

                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-10 ">
                        <div class="hero-wrapper">
                            <!-- Video icon -->
                            
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".3s" style="color: white"><?php echo e($slider->title); ?>

                                </h1>
                                <p data-animation="fadeInUp" data-delay=".6s" style="color: white">
                                    <?php echo e($slider->paragraph); ?><br>
                                </p>
                                <a href="services.html" class="btn" data-animation="fadeInLeft"
                                    data-delay=".3s" style="background-color: #7D525E">Ir a ver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->

</div>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/landing/slider.blade.php ENDPATH**/ ?>