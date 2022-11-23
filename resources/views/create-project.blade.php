<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('registrar-proyecto') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="nombre" :value="__('Nombre')" />

                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />

                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>

            <!-- Descripcion -->
            <div>
                <x-input-label for="descripcion" :value="__('Descripcion')" />

                <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('descripcion')" required autofocus />

                <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
            </div>

            <!-- Cliente -->
            <div>
                <x-input-label for="cliente" :value="__('Cliente')" />

                <x-text-input id="cliente" class="block mt-1 w-full" type="text" name="cliente" :value="old('cliente')" required autofocus />

                <x-input-error :messages="$errors->get('cliente')" class="mt-2" />
            </div>


            <!-- Fecha de inicio -->
            <div class="mt-4">
                <x-input-label for="fecha_inicio" :value="__('Fecha de inicio')" />

                <x-text-input id="fecha_inicio" class="block mt-1 w-full" type="date" name="fecha_inicio" :value="old('fecha_inicio')" required />

                <x-input-error :messages="$errors->get('fecha_inicio')" class="mt-2" />
            </div>

            <!-- Fecha de fin -->
            <div class="mt-4">
                <x-input-label for="fecha_fin" :value="__('Fecha de fin estimada')" />

                <x-text-input id="fecha_fin" class="block mt-1 w-full" type="date" name="fecha_fin" :value="old('fecha_fin')" required />

                <x-input-error :messages="$errors->get('fecha_fin')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
