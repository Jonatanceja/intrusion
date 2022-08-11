@extends('layouts.default')
@section('content')

<div class="py-10 container mx-auto space-y-5 min-h-screen">
        <x-header.h2>Blog</x-header.h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-20">
            @foreach ($page->children()->listed() as $subpage)
                <div class="pb-5 space-y-3 bg-white shadow-xl rounded-md">
                    @if ($image = $subpage->cover()->toFile())
                        <img src="{{ $image->crop(600, 400)->url() }}" alt="Portada de artículo">
                    @endif
                    <div class="space-y-2 py-2 px-5">
                        <x-header.h4>{{ $subpage->title() }}</x-header.h4>
                        <a class="hover:underline" href="{{ $subpage->url() }}">
                            Leer →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
</div>
@endsection
