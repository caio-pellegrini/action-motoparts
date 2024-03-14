<x-app-layout>
    <x-slot name="title">Action Motoparts</x-slot>

    <div class="relative w-full overflow-hidden mb-auto sm:h-[60vh] -mt-px">
        <img class="w-full h-full object-cover"src="{{asset('/images/banner_home.png')}}">
        </img>
    </div>
    <div class="container">


        <div class="md:flex items-center justify-center mt-20 p-5 mb-20 space-x-[-100px]">
            <img class="max-w-full px-20 rounded-lg" src="{{asset('/images/uniforme-imagem.png')}}" alt="">
        <div class="px-24">
                <h3 class="text-[35px] text-red-500 mb-4">
                    Action Distribuidora</h3>
                <p class="text-md">Analisando a tipografia da logo da Action Moto Parts, podemos notar algumas características:
                    - *Estilo da Fonte*: A fonte usada para "ACTION" é em estilo sans-serif, o que é evidenciado pela ausência de pequenos traços no final das letras. As sans-serifs são conhecidas por sua legibilidade e são frequentemente usadas em contextos modernos e digitais.
                    - *Peso e Impacto*: A palavra "ACTION" está em caixa alta (maiúsculas) com um peso de fonte grosso ou negrito, o que confere um impacto visual forte e comunica uma sensação de solidez e confiança.
                </p>
            </div>
        </div>
        <div class="md:flex items-center justify-center mt-40">
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