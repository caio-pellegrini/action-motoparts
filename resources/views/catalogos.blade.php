<x-app-layout>
    <x-slot name="title">Catálogos | Action Moto Parts</x-slot>

    <x-slot name="header">
        {{ ('CATÁLOGOS DE COMPRA') }}
    </x-slot>

    <div class="text-[#333]">
        
        <div class="font-readex flex justify-center mt-6">
            <div class="grid grid-cols-3 gap-4 px-40 mt-5 mb-32">
                <div class="flex flex-col items-center">
                    <a href="https://www.caceres.mt.gov.br/fotos_institucional_downloads/2.pdf" target="_blank">
                    <img class="w-full h-auto rounded-lg object-contain" src="{{asset('/images/catalogo.png')}}" alt="CATÁLOGO DE PEÇAS">
                    </a>
                    <p class="mt-2 text-center">CATÁLOGO DE PEÇAS</p>
                </div>
                <div class="flex flex-col items-center">
                    <img class="w-full h-auto rounded-lg object-contain" src="{{asset('/images/catalogo.png')}}" alt="CATÁLOGO DE PEÇAS">
                    <p class="mt-2 text-center">CATÁLOGO DE PEÇAS</p>
                </div>
				<div class="flex flex-col items-center">
                    <img class="w-full h-auto rounded-lg object-contain" src="{{asset('/images/catalogo.png')}}" alt="CATÁLOGO DE PEÇAS">
                    <p class="mt-2 text-center">CATÁLOGO DE PEÇAS</p>
                </div>
				<div class="flex flex-col items-center">
                    <img class="w-full h-auto rounded-lg object-contain" src="{{asset('/images/catalogo.png')}}" alt="CATÁLOGO DE PEÇAS">
                    <p class="mt-2 text-center">CATÁLOGO DE PEÇAS</p>
                </div>
				<div class="flex flex-col items-center">
                    <img class="w-full h-auto rounded-lg object-contain" src="{{asset('/images/catalogo.png')}}" alt="CATÁLOGO DE PEÇAS">
                    <p class="mt-2 text-center">CATÁLOGO DE PEÇAS</p>
                </div>
				<div class="flex flex-col items-center">
                    <img class="w-full h-auto rounded-lg object-contain" src="{{asset('/images/catalogo.png')}}" alt="CATÁLOGO DE PEÇAS">
                    <p class="mt-2 text-center">CATÁLOGO DE PEÇAS</p>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="footer"></x-slot>
</x-app-layout>
