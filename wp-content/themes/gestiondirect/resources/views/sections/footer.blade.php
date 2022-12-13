<footer class="content-info  bg-primary">
  <div class="container  grid grid-cols-5 gap-10 pt-20 pb-10">
    <div class="flex flex-col">
      <img src="https://gestiondirect.eu/wp-content/themes/gestiondirect/static/images/logo_sm.svg?v2" alt="" class="w-32">
      <div class="mt-4 flex">
        <div class="bg-white rounded-full p-1 w-6 h-6 flex justify-center items-center shadow-lg shadow-gray-200">
          <x-icon-phone/>
        </div>
        <span class="ml-2">+34 937 37 75 25</span>
      </div> 
      <div class="mt-2 flex">
        <div class="bg-white rounded-full p-1 w-6 h-6 flex justify-center items-center shadow-lg shadow-gray-200">
          <x-icon-mail/>
        </div>
        <span class="ml-2">gestiodirect@gd.eu</span>
      </div> 
      <label for="" class="font-bold text-xl mt-3">{{ __('Nuestro boletín','gd') }}!</label>
      <div class="relative mt-2">
        <input type="text" class="w-full py-1 px-3 rounded-lg shadow-md  focus:border-0 focus:shadow-none  bg-white" placeholder="Tu email aqui..." />
        <button class="absolute -top-1.5 -right-2 mt-2 mr-2 px-3 py-1 rounded-lg bg-primary text-black shadow-md hover:bg-gray-300  focus:outline-0 ">
          <i class="fa-solid fa-angle-right"></i>
        </button>
      </div> 
    </div>
    {{-- COL --}}
    <div class="">
      <h4 class="font-bold text-2xl ">{{ __('Servicios','gd') }}</h4>
      <ul class="mt-4 space-y-2"> 
        @foreach ($menuServices as $menu)
        <li class="">
          <a class=" "  href="{{ $menu['url'] }}">
            {{ $menu['menu'] }}
          </a>
        </li>
        @endforeach
      </ul>
    </div>
    {{-- COL --}}
    <div class="">
      <h4 class="font-bold text-2xl ">{{ __('Precios','gd') }}</h4>
      <ul class="mt-4 space-y-2"> 
        <li class="">
          <a class=" "  href="#">
            {{ __('Solicita una demo','gd') }}
          </a>
        </li>
      </ul>
    </div>
    {{-- COL --}}
    <div class="">
      <h4 class="font-bold text-2xl ">{{ __('Articulos recientes','gd') }}</h4>
      <ul class="mt-4 space-y-2"> 
        <li class="">
          <a class=" "  href="#">
            {{ __('Las pymes y los autónomos en España no pagarán el IVA hasta que cobren la factura Hello world!','gd') }}
          </a>
        </li>
      </ul>
    </div>
    {{-- COL --}}
    <div class="flex">
      <x-icon-apptstore/>
      <x-icon-googleplay class="ml-4 w-40" />
    </div>
  </div>
  <p class="text-center pb-10">Copyright © 2021 Gestion Directr — Todos los derechos reservados</p>
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
</footer>
