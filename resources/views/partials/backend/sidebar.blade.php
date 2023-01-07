<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link d-flex align-center justify-content-center">
      <img src="{{ asset('assets/image/default/site-logo.png') }}" alt="{{ config('app.name', 'Laravel') }}" class="brand-image img-circle" style="border-radius: 5%">
      <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        @include('partials.backend.menu')
    </div>
    <!-- /.sidebar -->
  </aside>
