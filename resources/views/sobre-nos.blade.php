<x-app-layout>

    <x-slot name="title">QUEM SOMOS</x-slot>

    <div class="font-readex text-[#333]"> 

    <h2 class="flex items-center justify-center mt-6 text-3xl p-8">NOSSA HISTÓRIA</h2>
    <div class="md:flex items-center justify-center mt-20 p-5 mb-20 space-x-[-100px]">
        <img class="max-w-full px-20 rounded-lg object-contain" src="{{asset('/images/historia.png')}}" alt="">
        <div class="px-24">
            <h3 class="text-[35px] text-green-500 mb-4">
                Action Distribuidora</h3>
            <p class="text-md">A Action Moto Parts é uma empresa especializada na distribuição de peças para motocicletas. Com foco na qualidade, inovação e serviço excepcional, a empresa conquistou rapidamente espaço no mercado. Seu compromisso com a excelência, ética e responsabilidade social a tornaram uma escolha confiável entre clientes e parceiros. Em constante crescimento, a Action Moto Parts busca sempre superar as expectativas do mercado.
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