<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('update-actividad') }}">
            @csrf

            <x-text-input class="block mt-1 w-full" type="hidden" name="id" :value="$actividad->id" />

            <!-- Usuario -->
            <x-input-label for="titulo" :value="__('Encargado de la actividad')" />
            <select class="form-select form-select-lg mb-3" name="idusuario" aria-label=".form-select-lg example">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user['name']}}</option>
                @endforeach
                
            </select>
            <br>


            <!-- titulo -->
            <div>
                <x-input-label for="titulo" :value="__('Titulo')" />

                <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="$actividad->titulo" required autofocus />

                <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
            </div>

            <!-- descripcion -->
            <div>
                <x-input-label for="descripcion" :value="__('Descripcion')" />

                <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="$actividad->descripcion" required autofocus />

                <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
            </div>


            <!-- Fecha de inicio -->
            <div class="mt-4">
                <x-input-label for="fecha_inicio" :value="__('Fecha de inicio')" />

                <x-text-input id="fecha_inicio" class="block mt-1 w-full" type="date" name="fecha_inicio" :value="$actividad->fecha_inicio" required />

                <x-input-error :messages="$errors->get('fecha_inicio')" class="mt-2" />
            </div>

            <!-- Fecha de fin -->
            <div class="mt-4">
                <x-input-label for="fecha_fin" :value="__('Fecha de fin')" />

                <x-text-input id="fecha_fin" class="block mt-1 w-full" type="date" name="fecha_fin" :value="$actividad->fecha_fin" required />

                <x-input-error :messages="$errors->get('fecha_fin')" class="mt-2" />
            </div>

            <!-- tiempo estimado -->
            <div>
                <x-input-label for="tiempo_estimado" :value="__('Tiempo estimado')" />

                <x-text-input id="tiempo_estimado" class="block mt-1 w-full" type="text" name="tiempo_estimado" :value="$actividad->tiempo_estimado" required autofocus />

                <x-input-error :messages="$errors->get('tiempo_estimado')" class="mt-2" />
            </div>

            <!-- prioridad -->
            <x-input-label for="titulo" :value="__('Prioridad')" />
            <select class="form-select form-select-lg mb-3" name="prioridad" aria-label=".form-select-lg example">
               
                <option value="Alta">Alta</option>
                <option value="Media">Media</option>
                <option value="Baja">Baja</option>
                
            </select>

            <!-- estatus -->
            <x-text-input class="block mt-1 w-full" type="hidden" name="estatus" :value="'Pendiente'" />

            <x-text-input class="block mt-1 w-full" type="hidden" name="proyecto_id" :value="$actividad->proyecto_id" />


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
