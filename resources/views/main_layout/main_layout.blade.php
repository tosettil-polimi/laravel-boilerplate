<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('main_layout.head')
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('main_layout.header')

    @yield('content')

    @include('main_layout.footer')
    @include('main_layout.scripts')
    @stack('scripts')
</body>
</html>
