<?php $__env->startSection('content'); ?>

<main>

    <form action="<?php echo e(route('comics.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
    
        <div>
    
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="<?php echo e(old('title')); ?>" placeholder="Inserisci il titolo del fumetto">
    
        </div>
        <div>
    
            <label for="description">Descrizione</label>
            <textarea  name="description" id="description" value="<?php echo e(old('description')); ?>">dskdhshgdssdkjdsjkdjk</textarea>
        
    
        </div>
        <div>
    
            <label for="thumb">Ulr img</label>
            <input type="text" name="thumb" id="thumb" value="<?php echo e(old('thumb')); ?>" placeholder="url">
    
        </div>
        <div>
    
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value="<?php echo e(old('price')); ?>" placeholder="Inserisci il prezzo del fumetto">
            
        </div>
        <div>
    
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" value="<?php echo e(old('series')); ?>" placeholder="Inserisci la serie del fumetto">
            
        </div>
        
        <button type="submit">
            aggiungi fumetto
    
        </button>
      
    
    </form>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/manuelfreund/Desktop/laravel/laravel-base-crud/resources/views/comics/create.blade.php ENDPATH**/ ?>