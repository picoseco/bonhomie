<header class="banner bg-primary">
  <div class="container">
    <nav class="nav-primary navbar fixed-top navbar-expand-md navbar-dark bg-primary">

      <a class="navbar-brand" href="{{ home_url('/') }}">
        <img src="@asset('images/logo.png')" width="60" height="60" alt="{{ get_bloginfo('name', 'display') }}">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif

    </nav>
  </div>
</header>
