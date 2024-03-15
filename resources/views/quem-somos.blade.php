<x-app-layout>

    <x-slot name="title">Quem Somos | Action Moto Parts</x-slot>

    <x-slot name="header">
        {{ ('NOSSA HISTÓRIA') }}
    </x-slot>

    @section('aditional-head')
    <style>
        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .animate-slideInLeft {
            animation: slideInLeft 1s ease-out forwards;
        }

        .animate-slideInRight {
            animation: slideInRight 1s ease-out forwards;
        }
    </style>
    @endsection

    <div class="md:flex items-center justify-center mt-20 p-5 mb-20 space-x-10">
    <div class="flex-1 animate-slideInLeft flex flex-col items-end">
        <img class="rounded-lg object-contain" src="{{asset('/images/historia.png')}}" alt="">
        <p class="text-right mt-2">Eduardo Carvalho | CEO da ACTION MOTO PARTS</p>
    </div>

    <div class="flex-1 animate-slideInRight flex flex-col items-start">
        <p class="text-lg pr-8">A Action Moto Parts é uma empresa especializada na distribuição de peças para motocicletas. Com foco na qualidade, inovação e serviço excepcional, a empresa conquistou rapidamente espaço no mercado. Seu compromisso com a excelência, ética e responsabilidade social a tornaram uma escolha confiável entre clientes e parceiros. Em constante crescimento, a Action Moto Parts busca sempre superar as expectativas do mercado.
        </p>
    </div>
</div>
        

    <div class="md:flex items-center justify-center mt-[450px] p-5 mb-20 space-x-[-100px]">
        <img class="max-w-full px-20 rounded-lg object-contain" src="{{asset('/images/fachada.png')}}" alt="">
        <div class="px-24">
            <h3 class="text-8 text-green-500 mb-4">
                Rua Jose Oliver Filho, 270 Jardim Bela Vista Monte Alto SP, 15910-000</h3>
        </div>
    </div>

    <x-slot name="footer"></x-slot>
</x-app-layout>