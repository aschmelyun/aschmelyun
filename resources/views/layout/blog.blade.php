<!DOCTYPE html>
<html lang="en-US">
@include('partials.head')
<body class="{{ $bodyClasses ?? '' }}">
<div class="container mx-auto pb-6 md:pb-12 antialiased">
    <div class="w-4/5 mx-auto">
        @include('partials.nav')
        <h1 class="mt-8 mb-12 text-4xl text-gray-900 font-medium section-heading relative"><span class="bg-white pr-3">All blog posts</span></h1>
        @php
            $posts = $cleaver->filter(function($post, $key) {
                return $post->view === 'layout.post';
            })->sortByDesc(function($post, $key) {
                return strtotime($post->published);
            });
        @endphp
        @foreach($posts as $post)
            @include('partials.blog.preview', ['post' => $post])
        @endforeach
        @include('partials.footer')
    </div>
</div>
</body>
</html>