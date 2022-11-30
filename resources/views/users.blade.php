<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Bienvenido a los usuarios {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>

@include ('filtro')

<a href="{{ route('create') }}"><button type="button" class="btn btn-dark">Agregar nuevo usuario</button></a>
<br>
<br>


<div id="contenido-tabla">
@include('contenido',['users'=>$users])
</div>



<script type="text/javascript" src="{{asset('js/controlador.js')}}"></script>

Spatie\LaravelIgnition\Exceptions\ViewException: Undefined variable $projects in file /Users/herschelgonzalez/Documents/GitHub/sistema-gestor-de-proyectos/resources/views/listaProyectos.blade.php on line 1



</x-app-layout>

