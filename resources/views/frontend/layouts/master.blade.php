@include('frontend.layouts.header')
@include('frontend.layouts.topbar')
@yield('model')
@yield('content')
@include('frontend.layouts.footer')
@include('frontend.layouts.script')