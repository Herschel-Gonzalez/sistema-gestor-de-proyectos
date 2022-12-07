<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('proyectos') }}
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
                    Bienvenido a los proyectos externos {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>

@forelse ($proyectos as $proyecto)
<div class="row" style="padding-left:30%">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><b>{{$proyecto['nombre']}}</b></h5>
        <p class="card-text"><b>Descripcion:</b> {{$proyecto['descripcion']}}</p>
        <p class="card-text"><b>Fecha de termino:</b> {{$proyecto['fecha_entrega']}}</p>
        <p class="card-text"><b>Estatus:</b> {{$proyecto['status']}}</p>
        <a href="{{ route('actividades_proyecto_externo',$proyecto['id']) }}" class="btn btn-primary">Ver actividades</a>
        
      </div>
    </div>
  </div>
</div>
<br>

@empty

<p>
    No hay proyectos todavia, espera a que agreguen una :)
</p>


@endforelse



    


</x-app-layout>
