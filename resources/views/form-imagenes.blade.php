
<form action="javascript:cargarImagenes();" method="POST" id="form-imagenes">
    @csrf
    <x-input-label for="evidencia" :value="__('Evidencia')" /><br>

    <x-primary-button id="subirEvidencia" type="submit" name="subirEvidencia" class="ml-4">
                    {{ __('Subir evidencia') }}
    </x-primary-button>
</form>

<br>
