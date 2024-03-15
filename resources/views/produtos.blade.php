<x-app-layout>
  <x-slot name="title">Produtos | Action Moto Parts</x-slot>

  <div class="relative w-full overflow-hidden mb-auto sm:h-[60vh] -mt-px p-8">
    <img class="w-full h-full object-contain" src="{{asset('/images/banner_produtos.jpg')}}" type="">
    </img>
  </div>
  <h2 class="flex items-center justify-center mt-6 text-3xl p-8">MAIS VENDIDOS</h2>
  <div class="flex items-center justify-center">
    <div class="shrink-0 grid grid-cols-3 gap-12 sm:max-w-12 mt-20 px-40">
      <div class="max-w-xs bg-white rounded-lg  overflow-hidden flex flex-col">
        <a href="#">
          <img class="w-full transition-transform duration-300 ease-in-out transform hover:scale-105" src="/images/produto1.png" alt="">
        </a>
        <div class="px-5 py-3 flex flex-col justify-between">
          <h5 class="text-gray-900 font-bold text-xl mb-2">Mini Pisca Flecha Lente Frisada | AWA</h5>
          <p class="text-gray-600 text-base mb-4">Kit com 4 peças</p>
          <div class="flex space-x-2 items-center mb-4">
            <span class="text-gray-900 text-lg">R$75,90</span>
            <span class="text-xs text-gray-600">à vista</span>
          </div>
          <x-botao-adicionar></x-botao-adicionar>
        </div>
      </div>
      <div class="max-w-xs bg-white rounded-lg  overflow-hidden">
        <a href="#">
          <img class="w-full transition-transform duration-300 ease-in-out transform hover:scale-105" src="/images/produto2.png" alt="">
        </a>
        <div class="px-5 py-3">
          <h5 class="text-gray-900 font-bold text-xl mb-2">Cubo de Roda Titan 150 | FIREBREQ</h5>
          <p class="text-gray-600 text-base mb-4">Unitário</p>
          <div class="flex space-x-2 items-center mb-4">
            <span class="text-gray-900 text-lg">R$103,99</span>
            <span class="text-xs text-gray-600">à vista</span>
          </div>
          <x-botao-adicionar></x-botao-adicionar>
        </div>
      </div>
      <div class="max-w-xs bg-white rounded-lg  overflow-hidden">
        <a href="#">
          <img class="w-full transition-transform duration-300 ease-in-out transform hover:scale-105" src="/images/produto3.png" alt="">
        </a>
        <div class="px-5 py-3">
          <h5 class="text-gray-900 font-bold text-xl mb-2">Patins de Freio Traseiro | FIREBREQ</h5>
          <p class="text-gray-600 text-base mb-4">Caixa c/ 3 unidades</p>
          <div class="flex space-x-2 items-center mb-4">
            <span class="text-gray-900 text-lg">R$15,50</span>
            <span class="text-xs text-gray-600">à vista</span>
          </div>
          <x-botao-adicionar></x-botao-adicionar>
        </div>
      </div>
    </div>
    <svg class="cursor-pointer" fill="#ababab" height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-59.4 -59.4 448.80 448.80" xml:space="preserve" transform="rotate(90)" stroke="#ababab" stroke-width="25.740000000000002">
      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
      <g id="SVGRepo_iconCarrier">
        <path id="XMLID_224_" d="M325.606,229.393l-150.004-150C172.79,76.58,168.974,75,164.996,75c-3.979,0-7.794,1.581-10.607,4.394 l-149.996,150c-5.858,5.858-5.858,15.355,0,21.213c5.857,5.857,15.355,5.858,21.213,0l139.39-139.393l139.397,139.393 C307.322,253.536,311.161,255,315,255c3.839,0,7.678-1.464,10.607-4.394C331.464,244.748,331.464,235.251,325.606,229.393z"></path>
      </g>
    </svg>

  </div>
  <h2 class="flex items-center justify-center mt-6 text-3xl p-8">OFERTAS DA SEMANA</h2>
  <div class="flex items-center justify-center">
    <div class="shrink-0 grid grid-cols-3 gap-12 px-40 mt-20">
      <div class="max-w-xs bg-white rounded-lg  overflow-hidden">
        <a href="#">
          <img class="w-full transition-transform duration-300 ease-in-out transform hover:scale-105" src="/images/produto4.png" alt="">
        </a>
        <div class="px-5 py-3">
          <h5 class="text-gray-900 font-bold text-xl mb-2">Cabo Embreagem, Freio e Acelerador</h5>
          <p class="text-gray-600 text-base mb-4">Kit com 3 unidades</p>
          <div class="flex space-x-2 items-center mb-4">
            <span class="text-gray-900 text-lg">R$67,90</span>
            <span class="text-xs text-gray-600">à vista</span>
          </div>
          <x-botao-adicionar></x-botao-adicionar>
        </div>
      </div>
      <div class="max-w-xs bg-white rounded-lg  overflow-hidden">
        <a href="#">
          <img class="w-full transition-transform duration-300 ease-in-out transform hover:scale-105" src="/images/produto5.png" alt="">
        </a>
        <div class="px-5 py-3">
          <h5 class="text-gray-900 font-bold text-xl mb-2">Escova de Motor de Partida</h5>
          <p class="text-gray-600 text-base mb-4">Unitário</p>
          <div class="flex space-x-2 items-center mb-4">
            <span class="text-gray-900 text-lg">R$83,99</span>
            <span class="text-xs text-gray-600">à vista</span>
          </div>
          <x-botao-adicionar></x-botao-adicionar>
        </div>
      </div>
      <div class="max-w-xs bg-white rounded-lg  overflow-hidden">
        <a href="#">
          <img class="w-full transition-transform duration-300 ease-in-out transform hover:scale-105" src="/images/produto6.png" alt="">
        </a>
        <div class="px-5 py-3">
          <h5 class="text-gray-900 font-bold text-xl mb-2">Kit Relação | Riffel</h5>
          <p class="text-gray-600 text-base mb-4">Coroa, Pinhão e Corrente</p>
          <div class="flex space-x-2 items-center mb-4">
            <span class="text-gray-900 text-lg">R$62,00</span>
            <span class="text-xs text-gray-600">à vista</span>
          </div>
          <x-botao-adicionar></x-botao-adicionar>
        </div>
      </div>
    </div>
    <svg class="cursor-pointer" fill="#ababab" height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-59.4 -59.4 448.80 448.80" xml:space="preserve" transform="rotate(90)" stroke="#ababab" stroke-width="25.740000000000002">
      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
      <g id="SVGRepo_iconCarrier">
        <path id="XMLID_224_" d="M325.606,229.393l-150.004-150C172.79,76.58,168.974,75,164.996,75c-3.979,0-7.794,1.581-10.607,4.394 l-149.996,150c-5.858,5.858-5.858,15.355,0,21.213c5.857,5.857,15.355,5.858,21.213,0l139.39-139.393l139.397,139.393 C307.322,253.536,311.161,255,315,255c3.839,0,7.678-1.464,10.607-4.394C331.464,244.748,331.464,235.251,325.606,229.393z"></path>
      </g>
    </svg>
  </div>
  <h2 class="flex items-center justify-center mt-6 text-3xl p-8">MELHORES KITS</h2>
  <div class="flex items-center justify-center mb-44">
    <div class="shrink-0 grid grid-cols-3 gap-12 px-40 mt-20">
      <div class="max-w-xs bg-white rounded-lg  overflow-hidden">
        <a href="#">
          <img class="w-full transition-transform duration-300 ease-in-out transform hover:scale-105" src="/images/produto7.png" alt="">
        </a>
        <div class="px-5 py-3">
          <h5 class="text-gray-900 font-bold text-xl mb-2">Conjunto Desempenho | FIREBREQ</h5>
          <p class="text-gray-600 text-base mb-4">Cubo de Roda, Pastilha de Freio e Patns de Freio</p>
          <div class="flex space-x-2 items-center mb-4">
            <span class="text-gray-900 text-lg">R$128,70</span>
            <span class="text-xs text-gray-600">à vista</span>
          </div>
          <x-botao-adicionar></x-botao-adicionar>
        </div>
      </div>
      <div class="max-w-xs bg-white rounded-lg  overflow-hidden">
        <a href="#">
          <img class="w-full transition-transform duration-300 ease-in-out transform hover:scale-105" src="/images/produto8.png" alt="">
        </a>
        <div class="px-5 py-3">
          <h5 class="text-gray-900 font-bold text-xl mb-2">Kit Performance | SMARTFOX</h5>
          <p class="text-gray-600 text-base mb-4">Pistão com anéis, Vela de Ignição e Jogo de Junta</p>
          <div class="flex space-x-2 items-center mb-4">
            <span class="text-gray-900 text-lg">R$270,60</span>
            <span class="text-xs text-gray-600">à vista</span>
          </div>
          <x-botao-adicionar></x-botao-adicionar>
        </div>
      </div>
      <div class="max-w-xs bg-white rounded-lg  overflow-hidden">
        <a href="#">
          <img class="w-full transition-transform duration-300 ease-in-out transform hover:scale-105" src="/images/produto9.png" alt="">
        </a>
        <div class="px-5 py-3">
          <h5 class="text-gray-900 font-bold text-xl mb-2">Conjunto Desempenho | Misto</h5>
          <p class="text-gray-600 text-base mb-4">Oléo 20W50, Kit Relação Riffel, Pneu Dianteiro 90/90</p>
          <div class="flex space-x-2 items-center mb-4">
            <span class="text-gray-900 text-lg">R$252,00</span>
            <span class="text-xs text-gray-600">à vista</span>
          </div>
          <x-botao-adicionar></x-botao-adicionar>
        </div>
      </div>
    </div>
    <svg class="cursor-pointer" fill="#ababab" height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-59.4 -59.4 448.80 448.80" xml:space="preserve" transform="rotate(90)" stroke="#ababab" stroke-width="25.740000000000002">
      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
      <g id="SVGRepo_iconCarrier">
        <path id="XMLID_224_" d="M325.606,229.393l-150.004-150C172.79,76.58,168.974,75,164.996,75c-3.979,0-7.794,1.581-10.607,4.394 l-149.996,150c-5.858,5.858-5.858,15.355,0,21.213c5.857,5.857,15.355,5.858,21.213,0l139.39-139.393l139.397,139.393 C307.322,253.536,311.161,255,315,255c3.839,0,7.678-1.464,10.607-4.394C331.464,244.748,331.464,235.251,325.606,229.393z"></path>
      </g>
    </svg>
  </div>
  <x-slot name="footer"></x-slot>

</x-app-layout>