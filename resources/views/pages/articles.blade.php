@extends('layout.default')
@section('content')
    <div class="flex">
        <div class="w-full lg:w-7/12">
            <h1 class="text-4xl lg:text-5xl font-semibold">Here's my articles.</h1>
            <div class="text-4xl lg:text-5xl font-semibold mt-8 lg:mt-16">Tutorials and walkthroughs I've written about PHP and web development.</div>
        </div>
    </div>
    <div class="flex bg-gray-100 py-6 lg:py-8 px-4 lg:px-12 pb-6 lg:pb-12 mt-24">
        <div class="w-full text-center">
            <div class="flex flex-wrap -mx-4 mt-4 lg:mt-8 text-left">
                @foreach($articles as $article)
                    <div class="w-full lg:w-1/2 px-4 mb-8">
                        <div class="bg-white shadow hover:shadow-xl transition-shadow duration-200">
                            <div class="py-4 px-6">
                                <p class="text-gray-700 text-lg leading-relaxed my-2 text-gray-900 font-semibold">{{ $article->title }}</p>
                                <p class="text-gray-700 text-lg leading-relaxed my-2">{{ $article->description }}</p>
                                <p class="text-gray-700 text-lg leading-relaxed my-2">&mdash; <a href="{{ $article->link }}" class="text-gray-700 hover:text-red-600 transition-colors duration-200" target="_blank" rel="noreferrer">Read More</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection