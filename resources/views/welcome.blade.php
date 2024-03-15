<x-app-layout>
    <x-slot name="title">Action Moto Parts</x-slot>

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

    <div class="flex relative w-full overflow-hidden sm:h-[60vh] -mt-px px-8 hover:scale-[1.03] ease-in-out transform transition-transform duration-300">
        <img class="w-full h-full object-contain" src="{{asset('/images/banner_home.png')}}"></img>
    </div>

    <div class="md:flex items-center justify-center my-24 pb-14 px-32 space-x-20">
        <img class="w-80 animate-slideInLeft" src="{{asset('/images/uniforme-imagem.png')}}" alt="">
        <div class="animate-slideInRight">
            <h3 class="text-[35px] text-green-500 mb-4">Action Distribuidora</h3>
            <p class="text-md">Nós atuamos no mercado de distribuição de peças para motos à mais de 34 anos e temos em nosso leque de produtos atualmente mais de 16 mil itens entre produtos nacionais e importados, somos considerados um dos maiores atacadistas de peças para motos do país. Contamos com sede própria localizada em Guarulhos, a Montanna Distribuidora de Motopeças alcança todo território nacional, por meio de suas filiais em pontos estratégicos, bem como seus representantes comerciais e revendas parceiras.
            </p>
        </div>
    </div>

    <a href="/produtos" class="relative w-full overflow-hidden mb-auto sm:h-[30vh] md:h-[40vh] lg:h-[50vh] xl:h-[60vh]">
        <img class="w-full h-full object-contain" src="{{asset('/images/banner_home2.png')}}"></img>
    </a>

    <div class="md:flex items-center justify-center mt-40">
        <div class="px-24">
            <h2 class="text-[40px] text-black px-40">
                PARCERiAS</h2>
        </div>
    </div>
    <div class="md:flex items-center justify-center">
        <img class="max-w-full px-20" src="{{asset('/images/parcerias-teste.png')}}" alt="">
        <img class="max-w-full px-20" src="{{asset('/images/parcerias-teste.png')}}" alt="">
        <img class="max-w-full px-20" src="{{asset('/images/parcerias-teste.png')}}" alt="">
        <img src="" alt="">
    </div>
    </div>

    <x-slot name="footer"></x-slot>

</x-app-layout>