<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actividades') }}
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
                    Bienvenido a las actividades de un proyecto {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>

<a href="{{ route('nueva_actividad',$project->id) }}" style="padding-left:42%"><button type="button" class="btn btn-dark">Agregar nueva actividad</button></a><br><br>
@forelse ($project->actividades as $actividad)
<div class="row" style="padding-left:30%">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><b>{{$actividad['titulo']}}</b></h5>
        <p class="card-text">{{$actividad['descripcion']}}</p>
        <p class="card-text"><b>Fecha de inicio:</b> {{$actividad['fecha_inicio']}}</p>
        <p class="card-text"><b>Fecha de entrega estimada:</b> {{$actividad['fecha_fin']}}</p>
        <p class="card-text"><b>Tiempo estimado:</b> {{$actividad['tiempo_estimado']}}</p>
        <p class="card-text"><b>Prioridad:</b> {{$actividad['prioridad']}}</p>
        <p class="card-text"><b>Estatus:</b> {{$actividad['estatus']}}</p>
        @foreach($users as $user)
            @if($user['id']==$actividad['idusuario'])
            <p class="card-text"><b>Encargado: {{$user['name']}}</b> </p>
            @endif
        @endforeach
        
        <a href="{{ route('editar_actividad',$actividad->id) }}" class="btn btn-primary">Editar actividad</a> <a href="{{ route('eliminar_actividad',$actividad->id) }}" class="btn btn-danger">Eliminar actividad</a>
      </div>
    </div>
  </div>
</div>
<br>

@empty

<p>
    No hay actividades todavia, agrega una :)
</p>


@endforelse



    


</x-app-layout>
