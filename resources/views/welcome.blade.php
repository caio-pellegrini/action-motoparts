<x-app-layout>
    <x-slot name="title">Action Motoparts</x-slot>

    <div class="relative w-full overflow-hidden mb-auto sm:h-[60vh] -mt-px p-8">
        <img class="w-full h-full object-contain" src="{{asset('/images/banner_home.png')}}"></img>
    </div>

    <div class="md:flex items-center justify-center mt-20 p-5 mb-20 space-x-[-100px]">
        <img class="max-w-full px-20 rounded-lg" src="{{asset('/images/uniforme-imagem.png')}}" alt="">
        <div class="px-24">
            <h3 class="text-[35px] text-green-500 mb-4">
                Action Distribuidora</h3>
            <p class="text-md">Nós atuamos no mercado de distribuição de peças para motos à mais de 34 anos e temos em nosso leque de produtos atualmente mais de 16 mil itens entre produtos nacionais e importados, somos considerados um dos maiores atacadistas de peças para motos do país. Contamos com sede própria localizada em Guarulhos, a Montanna Distribuidora de Motopeças alcança todo território nacional, por meio de suas filiais em pontos estratégicos, bem como seus representantes comerciais e revendas parceiras.
            </p>
        </div>
    </div>

    <div class="relative w-full overflow-hidden mb-auto sm:h-[30vh] md:h-[40vh] lg:h-[50vh] xl:h-[60vh]">
        <img class="w-full h-full object-contain" src="{{asset('/images/banner_home2.png')}}" alt="Banner Home">
        <a href="/produtos" class="absolute left-0 right-0 mx-auto bottom-10 sm:bottom-8 md:bottom-6 lg:bottom-4 xl:bottom-3 bg-green-500 text-white px-6 py-2 rounded shadow-lg hover:bg-green-600 transition-colors text-sm sm:text-base text-center w-max">
            Conheça nossos produtos
        </a>
    </div>



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