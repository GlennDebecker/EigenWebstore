
<script type="text/javascript" src="js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto mr-2">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="@if(isset(auth()->user()->image)){{ asset(auth()->user()->image)}}@else{{ asset('assets/image/default/avatar.png') }}@endif"
                     class="user-image img-circle elevation-2" alt="{{ Auth::user()->name() }}">
                <span class="d-none d-md-inline">{{ auth()->user()->name() }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right profile-details">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="@if(isset(Auth::user()->image)){{ asset(Auth::user()->image)}}@else{{ asset('assets/image/default/avatar.png') }}@endif"
                         class="img-circle elevation-2"
                         alt="User Image">
                    <p>
                        {{ auth()->user()->name() }}

                        <small>Member since {{ auth()->user()->created_at->format('M. Y') }}</small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                    <a href="#" class="btn btn-default btn-flat float-right"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sign out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    
    </ul>
</nav>
<script>
    


    $(document).ready( function() {
    $('.dropdown-toggle').dropdown();
    });
    </script>