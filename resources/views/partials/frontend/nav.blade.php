{{-- Navbar For Frontend --}}
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light " id="navbar">
        <div class="container">
            <strong class="site-logo">
                <a href="{{ route('frontend.home') }}">
                    <img src="{{  asset('assets/frontend/img/Logo-Computerkopen.png') }}" alt="logo" class="img-fluid"/>
                </a>
            </strong>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="d-lg-flex align-items-center d-block list-unstyled" id="nav">
                    <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('frontend.home') }}">Home</a></li>
                    <li><a class="nav-link {{ Request::is('products') ? 'active' : '' }}" href="{{ route('frontend.products') }}">Products</a></li>
                    <li><a class="nav-link {{ Request::is('frequently-asked-questions') ? 'active' : '' }}" href="{{ route('frontend.faq') }}">FAQ</a></li>
                    <li><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('frontend.contact') }}">Contact</a></li>
                    @if (auth()->user())
                    @if (auth()->user()->role==3 || auth()->user()->role==2)
                    <li><a class="nav-link " href="{{ route('users.index') }}">dashboard</a></li>

                    @endif
                    @if (auth()->user()->role==1)
                    <li><a class="nav-link {{ Request::is('chat') ? 'active' : '' }}" href="{{ route('frontend.user.chat') }}">Profile <span class=" bg-danger"> {{auth()->user()->messages->where('vue_user',0)->count()}}</span></a></li>

                    @endif
                    @endif
        
                 
                    <li class="language">
                        <div class="switch">
                            <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox" {{ session()->get('locale') == 'nl' ? 'checked' : '' }}>
                            <label for="language-toggle"></label>
                            <span class="on" id="en" data-url="{{ route('lang', 'en') }}">EN</span>
                            <span class="off" id="nl" data-url="{{ route('lang', 'nl') }}">NL</span>
                        </div>
                    </li>
                   
                    <span class="d-flex header-btn-wrap">
                        <li>
                      
                            @if (auth()->user())
                                @if(!Request::is('profile'))
                                <form id="logout-form" class="nav-link header-btn" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a class="nav-link header-btn" id="logout-button" href="javascript:void(0);" >
                                        <span class="me-2">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        </span>
                                        <span>Log Out</span>
                                    </a>
                                </form>
                                @else
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="nav-link header-btn">
                                    <span class="me-2"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                                    <span>Login</span>
                                </a>
                            @endif
                        </li>
                    </span>
                </ul>
            </div>

        </div>
    </nav>
</header>
