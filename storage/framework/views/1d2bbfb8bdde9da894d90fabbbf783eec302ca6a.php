<?php $__env->startSection('content'); ?>

        <?php echo e($comic->title); ?><hr>
        <img src="<?php echo e($comic->thumb); ?>" alt=""><br>


    
        €<?php echo e($comic->price); ?><br>
  
        <?php echo e($comic->series); ?><br>
 
        <?php echo e($comic->type); ?><br>

  
</tr>
</tr><?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/manuelfreund/Desktop/laravel/laravel-base-crud/resources/views/comics/show.blade.php ENDPATH**/ ?>