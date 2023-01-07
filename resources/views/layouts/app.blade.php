<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
{{-- meta --}}
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="lang" content="{{ session()->get('locale') == 'nl' ? 'nl' : 'en' }}">

    <title>@yield('title', config('app.name', 'Laravel')) - {{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Scripts --}}
    <script src="{{ asset('assets/frontend/js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>

    {{-- Toaster --}}
    <link href="{{ asset('css/toastr/toastr.min.css') }}" rel="stylesheet">
    <script src="{{ asset('css/toastr/toastr.min.js') }}"></script>

    {{-- Frontend Assets --}}
    <link href="{{ asset('assets/frontend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">

    {{-- Page CSS --}}
    @stack('third_party_stylesheets')
    @stack('page_css')

</head>
<body>
    <div id="app">

        <div class="wrapper">
            {{-- Main Navbar --}}
            @include('partials.frontend.nav')

            {{-- Main Page Content --}}
            <main class="" id="main">
                @yield('content')
            </main>

            {{-- Main Footer --}}
            @include('partials.frontend.footer')
        </div>
    </div>

    {{-- Page Scripts --}}
    @stack('third_party_scripts')
    @stack('page_scripts')

    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
            toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

{{-- Frontend Assets --}}
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>


</body>
</html>
