<header class="banner bg-secondary ">
  <div class="container flex items-center">
    <a class="brand" href="<?php echo e(home_url('/')); ?>">
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon-gd-white','data' => ['class' => 'w-44']]); ?>
<?php $component->withName('icon-gd-white'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-44']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </a>

  <?php if(has_nav_menu('primary_navigation')): ?>
    <nav class="nav-primary w-full" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
      <ul class="flex space-x-5 justify-end">
        <?php $__currentLoopData = $menuHeader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="pt-12 pb-8">
          <a class="text-white font-bold"  href="<?php echo e($menu['url']); ?>">
            <?php echo e($menu['menu']); ?>

          </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <li class="pt-11 pb-7">
          <a href="#" class="rounded-lg font-bold bg-success py-1 px-5 text-white inline-block" >
            <?php echo e(__('Empieza gratis','gd')); ?>

          </a>
        </li>
      </ul>
    </nav>
    <?php endif; ?>
  </div>
</header>
<?php /**PATH /var/www/gestiondirect.eu/wp-content/themes/gestiondirect/resources/views/sections/header.blade.php ENDPATH**/ ?>