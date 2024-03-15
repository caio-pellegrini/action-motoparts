<x-app-layout>

    <x-slot name="title">Quem Somos | Action Moto Parts</x-slot>

    <x-slot name="header">
        {{ ('NOSSA HISTÓRIA') }}
    </x-slot>

    <div class="md:flex items-center justify-center mt-20 p-5 mb-20 space-x-[-100px]">
        <img class="max-w-full px-20 rounded-lg object-contain" src="{{asset('/images/historia.png')}}" alt="">
        <div class="px-24">
            <h3 class="text-[35px] text-green-500 mb-4">
                Action Distribuidora</h3>
            <p class="text-md">A Action Moto Parts é uma empresa especializada na distribuição de peças para motocicletas. Com foco na qualidade, inovação e serviço excepcional, a empresa conquistou rapidamente espaço no mercado. Seu compromisso com a excelência, ética e responsabilidade social a tornaram uma escolha confiável entre clientes e parceiros. Em constante crescimento, a Action Moto Parts busca sempre superar as expectativas do mercado.
            </p>
        </div>
    </div>

    <div class="font-light tracking-wider text-2xl text-gray-800 leading-tight py-4">
        <div class="flex items-center justify-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2>NOSSO ESPAÇO</h2>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <hr class="w-[85%] border-gray-500">
        </div>
    </div>
    <div class="md:flex items-center justify-center mt-20 p-5 mb-20 space-x-12 mr-4">
        <iframe class="rounded-lg" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3558.5433333923156!2d-48.5095366!3d-21.2590084!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b945dee875bef1%3A0x2edfaee42e9395de!2sAction%20Moto%20Parts%20MOTOPE%C3%87AS!5e1!3m2!1sen!2sbr!4v1710512186499!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="text-md max-w-xl">
            <p>
                Pensando em vocês, clientes, a Action está com um espaço totalmente novo e exclusivo, para atender a todos da melhor maneira. Não deixe de conhecer, vem pra Action Moto Parts!
            </p>
        </div>
    </div>

    <div class="md:flex items-center justify-center">
    <video class="rounded-lg shadow-lg" controls width="640" height="360">
        <source src="{{asset('/home/video.mp4')}}" type="video/mp4">
    </video>
    
    </div>
    <div class="text-md px-24">
    <p class="md:flex items-center justify-center mt-8 mb-20">
    VEJA NOSSO VIDEO INSTITUCIONAL
    </p>

        </div>

    <x-slot name="footer"></x-slot>
</x-app-layout>