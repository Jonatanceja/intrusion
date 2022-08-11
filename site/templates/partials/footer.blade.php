<footer class="bg-navy-dark py-14">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 container mx-auto px-5 md:px-0">
        <div class="block md:flex md:space-x-5">
            <div class="text-gray-500 w-24 mx-auto md:m-0 mb-4 md:mb-0">
                <x-ui.logo></x-ui.logo>
            </div>
            <div class="text-gray-500 text-center md:text-left">
                <p>{{ $site->calle() }} No. {{ $site->numero() }}</p>
                <p>Col. {{ $site->colonia() }} C.P. {{ $site->codigo() }}</p>
                <p>{{ $site->ciudad() }}, {{ $site->estado() }}</p>
                <br>
                <p class="hover:text-gray-400 transition font-bold"><a href="mailto:{{ $site->mail() }}">{{ $site->mail() }}</a></p>
                <p class="hover:text-gray-400 transition font-bold"><a href="tel:{{ $site->telefono() }}">{{ $site->telefono() }}</a></p>
            </div>

        </div>
        <div class="text-center md:text-left">
            <h5 class="text-lg font-bold text-gray-500 uppercase">Navegación</h5>
            <div class="flex flex-col space-y-3 text-gray-500">
                <a href="{{ $site->url() }}" class="uppercase h-full border-b border-transparent transition">Inicio</a>
                @foreach ($site->grandChildren()->listed()->filterBy('intendedTemplate', 'service') as $item)
                  <a href="{{ $item->url() }}" class="uppercase h-full border-b border-transparent transition ml-3 text-gray-500">- {{ $item->title() }}</a>
                @endforeach
                <a href="/contacto" class="uppercase h-full border-b border-transparent transition">Contacto</a>

          </div>
        </div>
        <div class="text-center md:text-left">
            <h5 class="text-lg font-bold text-gray-500 uppercase">Ayuda</h5>
            <ul>
                <li>
                    <a href="/soporte" class="text-gray-500 uppercase hover:text-gray-400 transition">Soporte</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container mx-auto py-6 border-gray-500 border-t mt-6 px-5 md:px-0 flex items-center">
        <div class="w-full md:w-3/4">
            <p class="text-gray-500">Todos los derechos reservados <span class="font-bold">{{ $site->nombre() }} 2022</span> 2021</p>
        </div>
        <div class="w-full md:w-1/4 flex justify-end">
            <a class="text-xl transform hover:scale-110 text-gray-500" href="{{ $site->facebook() }}"><i class="lni lni-facebook-filled"></i></a>
        </div>
    </div>
</footer>