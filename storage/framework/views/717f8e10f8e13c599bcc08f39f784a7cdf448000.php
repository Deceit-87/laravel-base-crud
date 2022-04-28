<?php $__env->startSection('content'); ?>


<table>
    <tbody>

<?php $__currentLoopData = $comics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
    <td>
        <?php echo e($comic->title); ?>

    </td>
    <td>
        <?php echo e($comic->price); ?>

    </td>
    <td>
        <?php echo e($comic->series); ?>

    </td>
    <td>
        <?php echo e($comic->type); ?>

    </td>
    <td>
       <a href="<?php echo e(route('comics.show',$comic->id )); ?>">visualizza</a>
    </td>
</tr>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/manuelfreund/Desktop/laravel/laravel-base-crud/resources/views/comics/index.blade.php ENDPATH**/ ?>