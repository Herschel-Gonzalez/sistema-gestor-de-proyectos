
<form action="javascript:cargarImagenes();" method="POST" id="form-imagenes">
    @csrf
    <x-input-label for="evidencia" :value="__('Evidencia')" />

    @foreach ($actividad->media as $image)
    <img src="{{$image->getUrl()}}" alt="Evidencia"><br>
    @endforeach
    <x-text-input id="evidencia" class="block mt-1 w-full" type="file" name="evidencia[]" multiple />

    <x-input-error :messages="$errors->get('evidencia')" class="mt-2" />
</form>

<br>
