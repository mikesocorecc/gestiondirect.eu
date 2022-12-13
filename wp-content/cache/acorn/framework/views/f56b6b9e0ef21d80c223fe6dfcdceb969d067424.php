<?php $__env->startSection('content'); ?>
<section class="bg-[url('images/bg-header.png')] bg-no-repeat bg-cover h-full">
    <div class="container grid grid-cols-2 pt-52 pb-52 h-full ">
        <h3 class="flex flex-col justify-center [&>span]:font-bold">
            <span class=" text-6xl text-black "><?php echo e(__('Gestión','gd')); ?></span>
            <span class="text-info-500 text-6xl"><?php echo e(__('inteligente','gd')); ?></span>
            <span class="text-black text-4xl"><?php echo e(__('para tu empresa','gd')); ?></span>
        </h3>
    </div>
</section>
<section class="bg-info-100 pt-12 pb-12">
    <div class="container">
            <img src="<?= \Roots\asset('images/logo.png'); ?>" alt="logo-gestion-direct.png" class="w-72">
            <div class="grid grid-cols-4">
                <p class=" mt-4 text-lg  col-span-2"><span class="font-bold "><?php echo e(__('Es la plataforma digital','gd')); ?></span> <span><?php echo e(__('con la que gestionar tu empresa aumentando la productividad y automatizando los procesos.','gd')); ?></span></p>
                <div class="col-span-2 mx-auto">
                    <a href="#" class="inline-block rounded-2xl  bg-warning-900 text-white font-bold py-2 px-10 text-4xl">GD</a>
                </div>
            </div>
    </div>
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/gestiondirect.eu/wp-content/themes/gestiondirect/resources/views/front-page.blade.php ENDPATH**/ ?>