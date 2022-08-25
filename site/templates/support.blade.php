@extends('layouts.default')
@section('content')

<section class="container mx-auto px-5 md:px-0 mb-24 py-20">
    <div class="grid grid-cols-1">
        <div class=" space-y-5">
            <div class="space-y-2">
                <x-header.h2>{{ $page->title() }}</x-header.h2>
                <x-header.h4>{{ $page->text() }}</x-header.h4>
            </div>
            <div class="space-y-3">
                <x-header.h3>Indicaciones</x-header.h3>
                <x-text.regular>
                    {!! $page->steps()->kti() !!}
                </x-text.regular>
            </div>
            <div class="block md:flex space-x-5">
                <a href="{{ $page->mac() }}">
                    <x-buttons.navy class="mt-5 flex items-center">Descarga Mac <span><x-icons.macos class="text-white h-6 ml-3"></x-icons.macos></span>
                    </x-buttons.navy>
                </a>
                <a href="{{ $page->windows() }}">
                    <x-buttons.blue class="mt-5 flex items-center">Descarga Windows <span><x-icons.windows class="text-white h-6 ml-3"></x-icons.windows></span>
                    </x-buttons.blue>
                </a>
            </div>
        </div>
    </div>
    
    
</section>

@endsection