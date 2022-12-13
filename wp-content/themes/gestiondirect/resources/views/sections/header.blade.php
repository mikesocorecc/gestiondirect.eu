<header class="banner bg-secondary ">
  <div class="container flex items-center">
    <a class="brand" href="{{ home_url('/') }}">
      <x-icon-gd-white class="w-44" />
    </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary w-full" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      <ul class="flex space-x-5 justify-end">
        @foreach ($menuHeader as $menu)
        <li class="pt-12 pb-8">
          <a class="text-white font-bold"  href="{{ $menu['url'] }}">
            {{ $menu['menu'] }}
          </a>
        </li>
        @endforeach
        <li class="pt-11 pb-7">
          <a href="#" class="rounded-lg font-bold bg-success py-1 px-5 text-white inline-block" >
            {{ __('Empieza gratis','gd') }}
          </a>
        </li>
      </ul>
    </nav>
    @endif
  </div>
</header>
