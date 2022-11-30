
<form action="javascript:buscarUsuario();" method="POST" id="form-filtro">
    @csrf
    <div class="row"></div>
    <div class="col-md-3"></div>
    <div class="col-md-3">
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Buscar por nombre">
    </div>
    <div class="col-md-3">
        <br><input type="submit" name="boton-filtro" id="boton-filtro" class="btn btn-info btn-block">
    </div>
    <div class="col-md-3"></div>
</form>

<br>
