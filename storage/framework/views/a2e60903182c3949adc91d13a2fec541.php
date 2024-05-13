

<!-- <?php $__env->startSection('title','Add Task'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .error-message {
        color: red;
        font-size: 0.8rem;
    }
</style>
<?php $__env->stopSection(); ?> -->

<?php $__env->startSection('content'); ?>
<!-- <?php echo e($errors); ?> -->
<!-- <form method="POST" action="<?php echo e(route('tasks.store')); ?>">
    <?php echo csrf_field(); ?>
    <div>
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title" value="<?php echo e(old('title')); ?>">
        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="error-message"> <?php echo e($message); ?> </p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5"><?php echo e(old('description')); ?></textarea>
        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="error-message"> <?php echo e($message); ?> </p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div>
        <label for="long_description">Long Description</label>
        <textarea name="long_description" id="long_description" rows="10"><?php echo e(old('long_description')); ?></textarea>
        <?php $__errorArgs = ['long_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="error-message"> <?php echo e($message); ?> </p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div>
        <button type="submit">Add Task</button>
    </div>
</form> -->
<?php echo $__env->make('form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\l10-task-list\resources\views/create.blade.php ENDPATH**/ ?>