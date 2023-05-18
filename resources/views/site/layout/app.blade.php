<!doctype html>
<html class="no-js" lang="tr">
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
<title>@yield('title')</title>
@include('site.layout.head')
<body>
@yield('style')
{{-- FIXME: sorun oluşursa main body silinebilir  --}}
<main class="main-body">
    <!--====== Header Start ======-->
    @include('site.layout.header')
    <!--====== Header Ends ======-->
    @yield('content')
    @include('site.layout.footer')
</main>
@include('site.layout.script')
@yield('js')
</body>
</html>
