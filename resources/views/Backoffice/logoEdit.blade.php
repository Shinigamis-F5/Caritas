<x-backoffice-layout>
    <div class="container text-body mx-auto mt-20 w-1/2 border-red border-2 rounded-2xl p-10 relative">
        <h2 class="mb-10 text-h4 text-center">Editar logotipo de la organización</h2>
        <a class="absolute top-10 right-10 text-red" href="{{route('dashboard')}}">Atrás</a>
        
        <form method="POST" action="{{ route('logo.update', $profile->id) }}"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="flex flex-col">
                <label for="name">Logotipo de la organización</label>
                <input type="file" name="logo" id="logo" class="border-grey border-2 p-2 rounded mb-5 @error('logo') is-invalid @enderror placeholder="Elegir su logotipo">
                @error('logo')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <x-backoffice-button 
            txt="Cargar"/>
        </form>
    </div>
</x-backoffice-layout>