@foreach ($projects as $project)
<div class="row" style="padding-left:30%">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><b>{{$project['nombre']}}</b></h5>
        <p class="card-text">{{$project['descripcion']}}</p>
        <p class="card-text"><b>Cliente:</b> {{$project['cliente']}}</p>
        <p class="card-text"><b>Fecha de inicio:</b> {{$project['fecha_inicio']}}</p>
        <p class="card-text"><b>Fecha de entrega estimada:</b> {{$project['fecha_fin']}}</p>
        <a href="{{ route('actividades_proyecto',$project->id) }}" class="btn btn-primary">Ver actividades</a> <a href="{{ route('edit_project',$project->id) }}" class="btn btn-warning">Editar proyecto</a>
      </div>
    </div>
  </div>
</div>
<br>
@endforeach