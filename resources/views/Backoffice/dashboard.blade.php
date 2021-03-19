<x-backoffice-layout>
    
    <main class="pl-5 flex gap-20 flex-wrap justify-center text-body m-4">
        <div class="flex flex-col gap-20 flex-grow-1 w-1/3">
            <section class="border-red border-2 rounded-2xl p-5 h-64 flex-grow-0">
                <div class="flex justify-between mb-10">
                    <h2 class="text-h3">Datos de conexión</h2>
                    <a href="{{route('user-profile-information.edit')}}" class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light flex-end">Editar</a>
                </div>
                <div>
                    <div class="">
                        <h4 class="font-bold mb-3">Nombre:
                            <span class="font-normal">
                                {{$user->name}}
                            </span>
                        </h4>
                    </div>
                    <div class="pt-2">
                        <h4 class="font-bold mb-3">E-mail:
                            <span class="font-normal">
                                {{$user->email}}
                            </span>
                        </h4>
                    </div>
                </div>

            </section>

            <section class="border-red border-2 rounded-2xl p-5 flex-grow-0">
                @if($profile)
                <div class="flex justify-between mb-10">
                    <h2 class="text-h3">Logotipo</h2>
                    @if(!$profile->logo)
                    <a href="{{route('logo.edit', $profile->id)}}" class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light flex-end">Subir</a>
                    @else
                    <form action="{{ route('logo.delete', $profile->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <x-backoffice-button txt="Borrar" />
                    </form>
                    @endif
                </div>

                <div class="object-contain">
                    <img class="w-32 h-32" src="
                    @if($profile->logo)
                        {{ asset('storage/logo/' . $profile->logo) }}
                    @else
                        {{ asset('storage/logo/placeholder-300x202.jpg') }}
                    @endif
                    " alt="Logotipo">
                </div>

                @else
                <div class="flex justify-between mb-10">
                    <h2>Para poder subir el logotipo necesitais crear el perfil de la organización</h2>
                </div>
                @endif
            </section>

            @if(!$profile)
            <section class=" border-red border-2 rounded-2xl p-5 flex justify-between ">
                <h3 class="text-h3">Crear perfil de la organización</h3>
                <a class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light" href="{{route('dashboard.create')}}" type="button">
                    Crear
                </a>

            </section>
            @else
            <section class=" border-red border-2 rounded-2xl p-5 relative flex-grow-1">
                <h2 class="text-h3">Perfil de la organización</h2>
                <a class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light absolute top-5 right-5 text-center" href="{{route('dashboard.edit', $profile->id)}}" type="button">
                    Editar
                </a>
                <div class="pt-10 object-contain">
                    <h4 class="font-bold mb-3">Nombre:
                        <span class="font-normal">
                            {{$profile->name}}
                        </span>
                    </h4>
                    <h4 class="font-bold mb-3">Email:
                        <span class="font-normal">
                            {{$profile->org_email}}
                        </span>
                    </h4>
                    <h4 class="font-bold mb-3">Dirección:
                        <span class="font-normal">
                            {{$profile->direction}}
                        </span>
                    </h4>
                    <h4 class="font-bold mb-3">Población:
                        <span class="font-normal">
                            {{$profile->city}}
                        </span>
                    </h4>
                    <h4 class="font-bold mb-3">Código Postal:
                        <span class="font-normal">
                            {{$profile->postcode}}
                        </span>
                    </h4>
                    <h4 class="font-bold mb-3">Teléfono:
                        <span class="font-normal">
                            {{$profile->phone}}
                        </span>
                    </h4>
                    <h2 class="text-h3 my-6">
                        Datos Bancarios:
                    </h2>
                    <h4 class="font-bold mb-3">IBAN:
                        <span class="font-normal">
                            {{$profile->bankAccount}}
                        </span>
                    </h4>
                    <h4 class="font-bold "> Bizum:
                        <span class="font-normal">
                            {{$profile->bizum}}
                        </span>
                    </h4>

                </div>
            </section>
            @endif


        </div>
        <div class="w-1/3">
            <section class="w-full border-red border-2 rounded-2xl p-5 mb-20 flex flex-col items-center">
                <h3 class="text-h3 text-center my-6">
                    Qui Som / <br>
                    Quiénes Somos
                </h3>
                <a class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light text-center w-2/3 " href="{{route('about')}}" type="button">
                    Qui Som / Quienes Somos
                </a>

            </section>
            <section class="w-full flex flex-col border-red border-2 rounded-2xl p-5 mb-20 justify-between gap-10 items-center">
                <h3 class="text-h3 text-center my-6">
                    Que Pots Fer Tu / <br>
                    Que Puedes Hacer Tu
                </h3>

                <a class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light text-center w-2/3" href="{{route('donate')}}" type="button">
                    Donar / Donar
                </a>
                <a class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light text-center w-2/3" href="{{route('explainTheProject')}}" type="button">
                    Difusió / Difusión
                    <a class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light text-center w-2/3" href="{{route('volunteer')}}" type="button">
                        Voluntari/ Voluntario
                    </a>
                    <a class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light text-center w-2/3" href="{{route('partner')}}" type="button">
                        Col·laborador / Colaborador
                    </a>
            </section>
        </div>
    </main>
</x-backoffice-layout>