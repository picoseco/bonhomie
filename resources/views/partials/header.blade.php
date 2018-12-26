<header class="banner bg-primary">
  <div class="container">
    <nav class="nav-primary navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="{{ home_url('/') }}">
        <img src="@asset('images/logo.png')" width="60" height="60" alt="{{ get_bloginfo('name', 'display') }}">
      </a>
      @if (has_nav_menu('primary_navigation'))
        {{-- {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!} --}}
        {!! wp_nav_menu($primarymenu) !!}
      @endif
    </nav>
  </div>
</header>
