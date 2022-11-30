<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proyectos') }}
        </h2>
    </x-slot>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Bienvenido a los proyectos {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>

<a href="{{ route('create-project') }}" style="padding-left:42%"><button type="button" class="btn btn-dark">Agregar nuevo proyecto</button></a><br><br>
@include ('filtro-proyecto')

<div id="contenido-tarjetas">
@include('listaProyectos',['projects'=>$projects])
</div>

<script type="text/javascript" src="{{asset('js/controlador.js')}}"></script>



</x-app-layout>
