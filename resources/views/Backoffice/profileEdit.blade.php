<x-backoffice-layout>
    <div class="container mx-auto my-20 w-1/2 border-red border-2 rounded-2xl p-10 relative text-body">
        <h2 class="mb-10 text-h2 text-center">Editar perfil de la organización</h2>
        <a class="absolute top-10 right-10 text-red" href="{{route('dashboard')}}">Atrás</a>
        <form method="POST" action="{{ route('dashboard.update', $profile->id) }}">
            @method('PUT')
            @csrf
            <div class="flex flex-col">
                <label for="name">Nombre de la organización</label>
                <input type="text" name="name" id="name" class="border-grey border-2 p-2 rounded mb-5 @error('name') is-invalid @enderror" value="{{$profile->name}}" placeholder="Nombre de la organización">
                @error('name')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="org_email">Email de la organización</label>
                <input type="text" name="org_email" id="org_email" class="border-grey border-2 p-2 rounded mb-5 @error('org_email') is-invalid @enderror" value="{{$profile->org_email}}" placeholder="Email de la organización">
                @error('org_email')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror

            </div>

            <div class="flex flex-col">
                <label for="direction">Dirección</label>
                <input type="text" name="direction" id="direction" class="border-grey border-2 p-2 rounded mb-5 @error('direction') is-invalid @enderror" value="{{ $profile->direction }}" placeholder="Dirección">
                @error('direction')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="city">Población</label>
                <input type="text" name="city" id="city" class="border-grey border-2 p-2 rounded mb-5 @error('city') is-invalid @enderror" required value="{{ $profile->city }}" placeholder="Población">
                @error('city')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="postcode">Código Postal</label>
                <input type="text" name="postcode" id="postcode" class="border-grey border-2 p-2 rounded mb-5 @error('postcode') is-invalid @enderror" required value="{{ $profile->postcode }}" placeholder="Código Postal">
                @error('postcode')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="phone">Teléfono</label>
                <input type="text" name="phone" id="phone" class="border-grey border-2 p-2 rounded mb-5 @error('phone') is-invalid @enderror" required value="{{ $profile->phone }}" placeholder="Teléfono">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="bankAccount">Cuenta Bancaria</label>
                <input type="text" name="bankAccount" id="bankAccount" class="border-grey border-2 p-2 rounded mb-5 @error('bankAccount') is-invalid @enderror" required value="{{ $profile->bankAccount }}" placeholder="Cuenta Bancaria">
                @error('bankAccount')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="bizum">Bizum</label>
                <input type="text" name="bizum" id="bizum" class="border-grey border-2 p-2 rounded mb-5 @error('bizum') is-invalid @enderror" required value="{{ $profile->bizum }}" placeholder="Bizum">
                @error('bizum')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <x-backoffice-button 
            txt="Actualizar"/>
        </form>
    </div>
</x-backoffice-layout>