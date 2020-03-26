@extends('layout.default')
@section('content')
    <div class="flex">
        <div class="w-full lg:w-7/12">
            <h1 class="text-4xl lg:text-5xl font-semibold">Here's my projects.</h1>
            <div class="text-4xl lg:text-5xl font-semibold mt-8 lg:mt-16">Closed and open-source websites, apps, and packages I've built.</div>
        </div>
    </div>
    <div class="flex bg-gray-100 py-6 lg:py-8 px-4 lg:px-12 pb-6 lg:pb-12 mt-24">
        <div class="w-full text-center">
            <div class="flex flex-wrap -mx-4 mt-4 lg:mt-8 text-left">
                @foreach($projects as $project)
                    <div class="w-full lg:w-1/3 px-4 mb-8">
                        <div class="bg-white shadow hover:shadow-xl transition-shadow duration-200">
                            @if(isset($project->image))
                                <a class="block pt-4 px-6 hover:opacity-50 transition-opacity duration-200" href="{{ $project->link }}" target="_blank" rel="noreferrer">
                                    <img class="block" src="{{ $project->image }}">
                                </a>
                            @endif
                            <div class="py-4 px-6">
                                <p class="text-gray-700 text-lg leading-relaxed my-2"><span class="text-gray-900 font-semibold">{{ $project->title }}</span> {{ $project->description }}</p>
                                <p class="text-gray-700 text-lg leading-relaxed my-2">&mdash; <a href="{{ $project->link }}" class="text-gray-700 hover:text-red-600 transition-colors duration-200" target="_blank" rel="noreferrer">{{ $project->link }}</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection