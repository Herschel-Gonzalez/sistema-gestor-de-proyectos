<table class="table">
  <thead class="table-dark">
    <tr>
        <td>Nombre</td>
        <td>Paterno</td>
        <td>Materno</td>
        <td>Correo</td>
        <td>Contraseña</td>
        <td>Fecha de creación</td>
        <td>Fecha de actualización</td>
        <td>Perfil</td>
        <td>Acciones</td>
    </tr>    
  </thead>
  <tbody>
  
  @foreach ($users as $user)

  <tr>
    <td>{{$user['name']}}</td>
    <td>{{$user['paterno']}}</td>
    <td>{{$user['materno']}}</td>
    <td>{{$user['email']}}</td>
    <td>{{$user['password']}}</td>
    <td>{{$user['created_at']}}</td>
    <td>{{$user['updated_at']}}</td>
    <td>{{$user['tipo']}}</td>
    <td><a href="{{ route('edit', $user->id) }}" class="btn btn-primary">Editar</a> <a href="{{ route('delete', $user->id) }}" class="btn btn-danger">Eliminar</a></td>
  </tr>

  @endforeach
    
  </tbody>
</table>