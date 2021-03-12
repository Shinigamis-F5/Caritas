<x-layout>
    <div>
        <form method="POST" action="{{route('about.updateImage')}}" enctype="multipart/form-data">
        @method('PUT');
        @crsf
            <label for="section_image">Imagen de Sección</label>
            <input type="file" name="section_image" @errror('section_image') is-invalid placeholder="Seleccionar image">
            @error('section_image')
            <div>{{$message}}</div>
            @enderror

            <x-backoffice-button txt="Cargar"/> 
        </form>
    </div>
    <div>
        <form action="POST">
        </form>
    </div>

</x-layout>