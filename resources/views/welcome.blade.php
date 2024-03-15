<x-app-layout>
    <x-slot name="title">Action Moto Parts</x-slot>

    @section('aditional-head')
    <style>
        /* CSS para esconder e preparar para animação */
        .animate-prep-slideInLeft {
            opacity: 0;
            transform: translateX(-100%);
        }

        .animate-prep-slideInRight {
            opacity: 0;
            transform: translateX(100%);
        }

        /* CSS para animar para o estado visível */
        .animate-active {
            opacity: 1;
            transform: translateX(0);
            transition: opacity 1s, transform 1s;
        }
    </style>
    @endsection

    <div class="flex relative w-full overflow-hidden sm:h-[60vh] -mt-px px-8 hover:scale-[1.03] ease-in-out transform transition-transform duration-300">
        <img class="w-full h-full object-contain" src="{{asset('/images/banner_home.png')}}"></img>
    </div>

    <div class="md:flex items-center justify-center my-24 pb-14 px-32 space-x-20">
        <img id="uniformeImage" class="w-80 animate-prep-slideInLeft" src="{{asset('/images/uniforme-imagem.png')}}" alt="">
        <div id="actionText" class="animate-prep-slideInRight">
            <h3 class="text-[35px] text-green-500 mb-4">Action Distribuidora</h3>
            <p class="text-md">Nós atuamos no mercado de distribuição de peças para motos à mais de 34 anos e temos em nosso leque de produtos atualmente mais de 16 mil itens entre produtos nacionais e importados, somos considerados um dos maiores atacadistas de peças para motos do país. Contamos com sede própria localizada em Guarulhos, a Montanna Distribuidora de Motopeças alcança todo território nacional, por meio de suas filiais em pontos estratégicos, bem como seus representantes comerciais e revendas parceiras.
            </p>
        </div>
    </div>

    <a href="/produtos" class="relative w-full overflow-hidden mb-auto sm:h-[30vh] md:h-[40vh] lg:h-[50vh] xl:h-[60vh] ">
        <img class="w-full h-full object-contain hover:scale-[1.03] ease-in-out transform transition-transform duration-300" src="{{asset('/images/banner_home2.png')}}"></img>
    </a>

    <div class="md:flex items-center justify-center mt-40">
        <div class="px-24">
            <h2 class="text-[40px] text-black px-40">
                PARCERiAS</h2>
        </div>
    </div>
    <div class="md:flex items-center justify-center ">
        <img class="max-w-full px-20 hover:scale-[1.1] ease-in-out transform transition-transform duration-300" src="{{asset('/images/rifftel.png')}}" alt="">
        <img class="max-w-full px-20 hover:scale-[1.1] ease-in-out transform transition-transform duration-300" src="{{asset('/images/levorin.png')}}" alt="">
    </div>
    </div>

    <x-slot name="footer"></x-slot>

    <x-slot name="scripts">
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const observerOptions = {
                    root: null, // Usa o viewport como área de visão
                    threshold: 0.1, // Dispara quando 10% do elemento está visível
                };

                const observerCallback = (entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-active');
                        }
                    });
                };

                const observer = new IntersectionObserver(observerCallback, observerOptions);

                // Adiciona os elementos a serem observados
                const elementsToAnimate = document.querySelectorAll('.animate-prep-slideInLeft, .animate-prep-slideInRight');
                elementsToAnimate.forEach(element => {
                    observer.observe(element);
                });
            });
        </script>
    </x-slot>

</x-app-layout>