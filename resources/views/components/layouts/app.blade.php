<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    @yield('page_title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="وبگراف" name="description" />
    <meta content="Themesdesign" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/fonts/fontawesome/css/all.min.css')}}" rel="stylesheet">
    @yield('header')
</head>
<body data-topbar="colored">
<div id="layout-wrapper">
    @include('livewire.panel.layouts.header')
    @include('livewire.panel.layouts.verticalMenu')
    <div class="main-content">
        {{$slot}}
        @include('livewire.panel.layouts.footer')
    </div>
    @livewireStyles
</div>
<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
@yield('footer')
@livewireScripts
</body>
</html>
