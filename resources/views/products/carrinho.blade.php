<x-app-layout>
    <x-slot name="title">Carrinho | Action Moto Parts</x-slot>
    <x-slot name="header">
        {{ ('SEU CARRINHO TEM 6 ITENS') }}
    </x-slot>

    <div class="container mx-auto mt-8 p-8 m-8 space-y-12">
        <div class="flex flex-col">
            <div class="flex justify-between items-center p-4 border-b">
                <div class="flex items-center">
                    <img class="h-20 w-20 object-cover" src="/images/produto4.png" alt="Conjunto Desempenho | Misto">
                    <div class="ml-4">
                        <div class="text-xl font-bold">Cabo Embreagem, Freio e Acelerador</div>
                        <div class="text-sm">Kit com 3 unidades</div>
                    </div>
                </div>
                <div class="text-xl font-bold">R$67,90</div>
                <div class="flex items-center">
                    <input type="number" class="w-12 text-center border rounded px-2 py-1 mr-2" value="3">
                    <svg class="fill-current text-gray-500 w-4 h-4 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M14.348 14.859a.5.5 0 0 1-.707 0l-4.646-4.647-4.646 4.647a.5.5 0 1 1-.707-.707l4.646-4.647-4.646-4.647a.5.5 0 1 1 .707-.707l4.646 4.647 4.646-4.647a.5.5 0 1 1 .707.707l-4.646 4.647 4.646 4.647a.5.5 0 0 1 0 .707z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="flex justify-between items-center p-4 border-b">
                <div class="flex items-center">
                    <img class="h-20 w-20 object-cover" src="/images/produto7.png" alt="Conjunto Desempenho | Misto">
                    <div class="ml-4">
                        <div class="text-xl font-bold">Conjunto Desempenho | Misto</div>
                        <div class="text-sm text-gray-600">Óleo 20W50, Kit Relação Riffel, Pneu Dianteiro 90/90</div>
                    </div>
                </div>
                <div class="text-xl font-bold">R$252,00</div>
                <div class="flex items-center">
                    <input type="number" class="w-12 text-center border rounded px-2 py-1 mr-2" value="3">
                    <svg class="fill-current text-gray-500 w-4 h-4 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M14.348 14.859a.5.5 0 0 1-.707 0l-4.646-4.647-4.646 4.647a.5.5 0 1 1-.707-.707l4.646-4.647-4.646-4.647a.5.5 0 1 1 .707-.707l4.646 4.647 4.646-4.647a.5.5 0 1 1 .707.707l-4.646 4.647 4.646 4.647a.5.5 0 0 1 0 .707z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center p-4 mt-12">
    <div class="text-2xl font-bold">Valor Total: R$455,70</div>
    <div class="flex space-x-8">
        <a href="{{ route('produtos') }}" class="flex items-center text-white bg-gray-500 hover:bg-green-600 py-2 px-4 rounded-lg">
            <svg width="20px" height="20px" viewBox="-6 -6 36.00 36.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" class="mr-2">
            <path d="M7.68473 7.33186C8.07526 6.94134 8.07526 6.30817 7.68473 5.91765C7.29421 5.52712 6.66105 5.52712 6.27052 5.91765L1.60492 10.5832C0.823873 11.3643 0.823872 12.6306 1.60492 13.4117L6.27336 18.0801C6.66388 18.4706 7.29705 18.4706 7.68757 18.0801C8.0781 17.6896 8.0781 17.0564 7.68757 16.6659L4.02154 12.9998L22 12.9998C22.5523 12.9998 23 12.5521 23 11.9998C23 11.4476 22.5523 10.9998 22 10.9998L4.01675 10.9998L7.68473 7.33186Z" fill="#ffffff"></path>
            </svg>
            <span>CONTINUAR COMPRANDO</span>
        </a>
        <a class="flex items-center text-white bg-red-500 hover:bg-red-600 py-2 px-4 rounded-lg">
            <svg width="20px" height="20px" viewBox="-7.75 -7.75 40.50 40.50" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
            <path d="M19 5L5 19M5.00001 5L19 19" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span>LIMPAR CARRINHO</span>
        </a>
        <a href="{{ route('listarCheckout') }}" class="flex items-center text-white bg-green-700 hover:bg-green-800 py-2 px-4 rounded-lg">
            <svg width="20px" height="20px" viewBox="-3.12 -3.12 30.24 30.24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span>FINALIZAR PEDIDO</span>
        </a>
    </div>
</div>


    </div>
    <x-slot name="footer"></x-slot>
</x-app-layout>