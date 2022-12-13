<footer class="content-info  bg-primary">
  <div class="container  grid grid-cols-5 gap-10 pt-20 pb-10">
    <div class="flex flex-col">
      <img src="https://gestiondirect.eu/wp-content/themes/gestiondirect/static/images/logo_sm.svg?v2" alt="" class="w-32">
      <div class="mt-4 flex">
        <div class="bg-white rounded-full p-1 w-6 h-6 flex justify-center items-center shadow-lg shadow-gray-200">
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon-phone','data' => []]); ?>
<?php $component->withName('icon-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
        <span class="ml-2">+34 937 37 75 25</span>
      </div> 
      <div class="mt-2 flex">
        <div class="bg-white rounded-full p-1 w-6 h-6 flex justify-center items-center shadow-lg shadow-gray-200">
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon-mail','data' => []]); ?>
<?php $component->withName('icon-mail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
        <span class="ml-2">gestiodirect@gd.eu</span>
      </div> 
      <label for="" class="font-bold text-xl mt-3"><?php echo e(__('Nuestro boletín','gd')); ?>!</label>
      <div class="relative mt-2">
        <input type="text" class="w-full py-1 px-3 rounded-lg shadow-md  focus:border-0 focus:shadow-none  bg-white" placeholder="Tu email aqui..." />
        <button class="absolute -top-1.5 -right-2 mt-2 mr-2 px-3 py-1 rounded-lg bg-primary text-black shadow-md hover:bg-gray-300  focus:outline-0 ">
          <i class="fa-solid fa-angle-right"></i>
        </button>
      </div> 
    </div>
    
    <div class="">
      <h4 class="font-bold text-2xl "><?php echo e(__('Servicios','gd')); ?></h4>
      <ul class="mt-4 space-y-2"> 
        <?php $__currentLoopData = $menuServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="">
          <a class=" "  href="<?php echo e($menu['url']); ?>">
            <?php echo e($menu['menu']); ?>

          </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
    
    <div class="">
      <h4 class="font-bold text-2xl "><?php echo e(__('Precios','gd')); ?></h4>
      <ul class="mt-4 space-y-2"> 
        <li class="">
          <a class=" "  href="#">
            <?php echo e(__('Solicita una demo','gd')); ?>

          </a>
        </li>
      </ul>
    </div>
    
    <div class="">
      <h4 class="font-bold text-2xl "><?php echo e(__('Articulos recientes','gd')); ?></h4>
      <ul class="mt-4 space-y-2"> 
        <li class="">
          <a class=" "  href="#">
            <?php echo e(__('Las pymes y los autónomos en España no pagarán el IVA hasta que cobren la factura Hello world!','gd')); ?>

          </a>
        </li>
      </ul>
    </div>
    
    <div class="flex">
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon-apptstore','data' => []]); ?>
<?php $component->withName('icon-apptstore'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon-googleplay','data' => ['class' => 'ml-4 w-40']]); ?>
<?php $component->withName('icon-googleplay'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'ml-4 w-40']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
  </div>
  <p class="text-center pb-10">Copyright © 2021 Gestion Directr — Todos los derechos reservados</p>
  
</footer>
<?php /**PATH /var/www/gestiondirect.eu/wp-content/themes/gestiondirect/resources/views/sections/footer.blade.php ENDPATH**/ ?>