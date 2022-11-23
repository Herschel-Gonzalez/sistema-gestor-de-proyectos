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

<a href="{{ route('create') }}"><button type="button" class="btn btn-dark">Agregar nuevo usuario</button></a>
<br>
<br>

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

    


</x-app-layout>
