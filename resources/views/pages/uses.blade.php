@extends('layout.default')
@section('content')
    <div class="flex">
        <div class="w-full lg:w-7/12">
            <h1 class="text-4xl lg:text-5xl font-semibold">Here's what I use.</h1>
            <div class="text-4xl lg:text-5xl font-semibold mt-8 lg:mt-16">My current picks for web dev, general programming, and video recording.</div>
        </div>
    </div>
    <div class="flex bg-gray-100 py-6 lg:py-8 px-4 lg:px-12 pb-6 lg:pb-12 mt-24">
        <div class="w-full text-center">
            <div class="flex flex-wrap -mx-4 mt-4 lg:mt-8 text-left">
                @foreach($sections as $section)
                    <div class="w-full text-center mb-4">
                        <h2 class="text-3xl font-semibold">{{ $section->title }}</h2>
                    </div>
                    @foreach($section->items as $item)
                        <div class="w-full px-4 mb-8">
                            <div class="bg-white shadow hover:shadow-xl transition-shadow duration-200">
                                <div class="py-4 px-6">
                                    @if(isset($item->link))
                                        <p class="text-gray-700 text-lg leading-relaxed my-2 text-gray-900 font-semibold">
                                            <a class="hover:text-red-600 transition-color duration-200" href="{{ $item->link }}">{{ $item->name }}</a>
                                        </p>
                                    @else
                                        <p class="text-gray-700 text-lg leading-relaxed my-2 text-gray-900 font-semibold">{{ $item->name }}</p>
                                    @endif
                                    <p class="text-gray-700 text-lg leading-relaxed my-2">{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection