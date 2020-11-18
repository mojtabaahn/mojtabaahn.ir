@extends('_layouts.master')
@section('body')
    <div class="max-w-2xl mx-auto pt-16 min-h-screen border-l border-r border-gray-200 px-8">
        <h2 class="text-6xl font-light mb-8">
            <div class="inline-block relative cursor-default" x-data="{hovered : false}" x-on:mouseenter="hovered = true" x-on:mouseleave="hovered = false">
                <div class="px-3 relative z-10">Api Docs</div>
                <div class="absolute left-0 bottom-0 h-4 bg-red-500 bg-opacity-50 w-full transform transition duration-100" x-bind:class="{'translate-y-1' : !hovered}"></div>
            </div>
        </h2>
        <div class="grid grid-cols-1 px-4 gap-10 py-10">
            @foreach($docs as $doc)
                <div class="block text-3xl font-light relative">
                    <a
                            x-data="{hovered : false}" x-on:mouseenter="hovered = true" x-on:mouseleave="hovered = false"
                            class="relative inline-block px-2" href="{{$doc->getUrl()}}"
                    >
                        <span class="absolute left-0 top-1/2 h-12 w-12 bg-{{$doc->color}}-500 transform -translate-y-1/2 bg-opacity-25 transition-all duration-300" x-bind:class="{'w-full bg-opacity-100' : hovered,'-translate-x-2' : !hovered}"></span>
                        <span class="relative transition-all duration-300">{{$doc->title}}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection