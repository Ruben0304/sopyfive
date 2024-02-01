<div class="ms-n2">
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
            href="#!"><?php echo e($category->name); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/component/category-item.blade.php ENDPATH**/ ?>