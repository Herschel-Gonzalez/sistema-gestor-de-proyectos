<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

         <!-- evidencia -->
         <div>
                @include('form-imagenes')
                <div id="previsualizacion"></div>
                <div id="evAlmacenadas" style="visibility: visible;">
                    @foreach ($actividad->media as $image)
                    <img src="{{$image->getUrl()}}" alt="Evidencia"><br>
                    @endforeach
                </div>
                
        </div>


        <form method="POST" action="{{ route('update-actividad') }}" enctype="multipart/form-data">
            @csrf

            <x-text-input class="block mt-1 w-full" type="hidden" name="id" :value="$actividad->id" />
            <x-text-input class="block mt-1 w-full" type="hidden" name="idusuario" :value="$actividad->idusuario" />
            <x-text-input class="block mt-1 w-full" type="hidden" name="titulo" :value="$actividad->titulo" />
            <x-text-input class="block mt-1 w-full" type="hidden" name="descripcion" :value="$actividad->descripcion" />
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

            <x-text-input class="block mt-1 w-full" type="hidden" name="prioridad" :value="$actividad->prioridad" />

            <!-- estatus -->
            <x-input-label for="titulo" :value="__('Estatus')" />
            <select class="form-select form-select-lg mb-3" name="estatus" aria-label=".form-select-lg example">
               
                <option value="Pendiente">Pendiente</option>
                <option value="En Proceso">En proceso</option>
                <option value="Completada">Completada</option>
                
            </select>

            

            <x-text-input id="proyecto_id" class="block mt-1 w-full" type="hidden" name="proyecto_id" :value="$actividad->proyecto_id" />

            <x-text-input id="evidencia" style="display: none;" class="block mt-1 w-full" type="file" name="evidencia[]" multiple />


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
    <script type="text/javascript" src="{{asset('js/controlador.js')}}"></script>
</x-guest-layout>
