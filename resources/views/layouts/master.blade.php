<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel')) - {{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Jquery --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> --}}

    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Latest Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> --}}

    {{-- Admin LTE --}}
    <script type="text/javascript" src="js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Toaster --}}


    {{-- Scripts --}}

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/backend/custom.css') }}">

    {{-- Page CSS --}}
    @stack('third_party_stylesheets')
    @stack('page_css')

</head>
<body id="body-pd">
    <div id="app" class="wrapper">
        {{-- Main Header --}}
        @include('partials.backend.nav')

        {{-- Left side column. contains the logo and sidebar --}}
        @include('partials.backend.sidebar')

        {{-- Main Page Content --}}
        <main class="">
            <div class="content-wrapper  py-5 px-5">
                @yield('content')
            </div>
        </main>

        {{-- Main Footer --}}
        @include('partials.backend.footer')
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

    {{-- Custom Script --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/backend/custom.js') }}"></script>
  <script>

$(document).ready( function() {
$('.dropdown-toggle').dropdown();
});
  </script>
</body>
</html>
