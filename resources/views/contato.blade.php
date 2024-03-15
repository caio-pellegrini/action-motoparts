<x-app-layout>
    <x-slot name="title">Perfil | Cafuné</x-slot>

    <x-slot name="header">
        {{ __('FALE CONOSCO') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card de imagem de perfil -->
            <div class="md:col-span-1 space-y-6">
                <div class="p-8 bg-white shadow rounded-lg">

                </div>
                <div class="p-8 bg-white shadow rounded-lg">

                </div>
            </div>

            <!-- Card de editar perfil e alterar senha -->
            <div class="md:col-span-2 space-y-6">
                <div class="p-8 bg-white shadow rounded-lg">

                </div>
                <div class="p-8 bg-white shadow rounded-lg">

                </div>
            </div>
        </div>
    </div>
</x-app-layout>