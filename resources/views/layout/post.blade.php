<!DOCTYPE html>
<html lang="en-US">
@include('partials.head')
<body class="{{ $bodyClasses ?? '' }}">
<div class="container mx-auto pb-6 md:pb-12 antialiased">
    <div class="w-4/5 mx-auto">
        @include('partials.nav')
        @include('partials.blog.content')
    </div>
</div>
@include('partials.footer')
</body>
</html>