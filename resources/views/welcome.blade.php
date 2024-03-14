<x-app-layout>
    <x-slot name="title">Cafuné Pâtisserie</x-slot>

    <div class="container">

        <div class="relative w-full overflow-hidden mb-auto sm:h-[60vh] -mt-px">
            <div class="absolute w-full h-full bg-black opacity-60"></div>
            <video class="w-full h-full object-cover" autoplay muted loop>
                <source src="{{asset('/home/video.mp4')}}" type="video/mp4">
            </video>

            <div class="absolute top-1/2 w-full left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <p class="font-arial text-green-500 text-center text-3xl md:text-5xl">
                    Action Moto Parts
                </p>
            </div>
        </div>

        <div class="md:flex items-center justify-center mt-[50px] p-[20px] mb-20 px-8 sm:wrap">
            <img class="max-w-full px-20" src="{{asset('/images/action-auto-pecas.jpg')}}" alt="">
        <div class="px-24">
                <h3 class="text-[35px] text-red-500 mb-4">
                    Action Distribuidora</h3>
                <p class="text-md">Analisando a tipografia da logo da Action Moto Parts, podemos notar algumas características:
- *Estilo da Fonte*: A fonte usada para "ACTION" é em estilo sans-serif, o que é evidenciado pela ausência de pequenos traços no final das letras. As sans-serifs são conhecidas por sua legibilidade e são frequentemente usadas em contextos modernos e digitais.
- *Peso e Impacto*: A palavra "ACTION" está em caixa alta (maiúsculas) com um peso de fonte grosso ou negrito, o que confere um impacto visual forte e comunica uma sensação de solidez e confiança.
</p>
            </div>
        </div>

        <div class="md:flex items-center justify-center mt-[90px]">
            <div class="px-24">
                <h2 class="text-[40px] text-red-500 px-40">
                    PARCERiAS</h2>
                <p class="text-grey-100 opacity-50 text-md px-20">
                    Conheça e visite as principais parcerias da Action!</p>
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