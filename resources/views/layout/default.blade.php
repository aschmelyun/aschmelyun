<!DOCTYPE html>
<html lang="en-US">
@include('partials.head')
<body class="antialiased text-gray-900 relative {{ $bodyClasses ?? '' }}">
@include('partials.header')
<div class="px-6 lg:px-16 mt-8 lg:mt-32">
    @yield('content')
</div>
@include('partials.footer')
</body>
</html>