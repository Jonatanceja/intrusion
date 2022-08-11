@extends('layouts.default')
@section('content')

<section>
    <div class="container mx-auto px-5 md:px-0 py-20">
        <x-header.h2>{{ $page->title() }}</x-header.h2>
    </div>
    <div class="container px-5 md:px-0 mx-auto grid grid-cols-2 md:grid-cols-4 gap-10 py-12">
        @foreach ($page->children()->listed() as $subpage)
        <a href="{{ $subpage->url() }}">
            <x-ui.card3 class="wow fadeInUp text-center uppercase" data-wow-delay="{{ $loop->iteration * 250 }}ms">
                @if ($image = $subpage->cover()->toFile())
                    <img src="{{ $image->url() }}" alt="Imagen de producto">
                @endif
                <x-header.h4>{{ $subpage->title() }}</x-header.h4> 
                <x-text.regular class="text-sm">{{ $subpage->description() }}</x-text.regular>
            </x-ui.card3>
        </a>
        @endforeach
    </div>
    
</section>

@endsection