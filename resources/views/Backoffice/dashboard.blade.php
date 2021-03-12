<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>Caritas Badalona</title>
</head>

<body>
    <header class="border-b-2 border-red-500 mb-20 pt-3 px-3">
    <div>
        <h1 class="text-3xl mb-5">Caritas Escritorio</h1>
        <ul class="flex">
            <li class="mr-6">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-gray-600 hover:text-red-500" type="submit">Desconectar</button>
                </form>

            </li>
        </ul>

    </header>
    <main class="container m pl-5">

        <section class="w-mt-72 w-1/2 border-red-300 border-2 rounded-2xl p-5 mb-20">
            <div class="flex justify-between mb-10">
                <h2 class="text-xl">Datos de conección</h2>
                <a href="{{route('user-profile-information.edit')}}" class="block bg-red-500 hover:bg-red-300 text-white font-bold p-2 text-md rounded border-b-4 border-red-500 flex-end">Actualizar</a>
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

        <section class="w-mt-72 w-1/2 border-red-300 border-2 rounded-2xl p-5 mb-20">
            @if($profile)
            <div class="flex justify-between mb-10">
                <h2 class="text-xl">Logotipo</h2>
                @if(!$profile->logo)
                    <a href="{{route('logo.edit', $profile->id)}}" class="block bg-red-500 hover:bg-red-300 text-white font-bold p-2 text-md rounded border-b-4 border-red-500 flex-end">Subir</a>                    
                @else
                <form action="{{ route('logo.delete', $profile->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="block bg-red-500 hover:bg-red-300 text-white font-bold p-2 text-md rounded border-b-4 border-red-500 flex-end" type="submit">Borrar</button>                    
                </form>
                @endif
            </div>
            <div>
                <div class="">
                    <img src="
                    @if($profile->logo)
                        {{ asset('storage/logo/' . $profile->logo) }}
                    @else
                        {{ asset('storage/logo/placeholder-300x202.jpg') }}
                    @endif
                    " alt="Logotipo" >
                </div>
            </div>
            @else 
            <div class="flex justify-between mb-10">
            <h2>Para poder subir el logotipo necesitais crear el perfil de la organización</h2>
            </div>
            @endif
        </section>

        @if(!$profile)
        <section class="w-mt-72 w-1/2 border-red-300 border-2 rounded-2xl p-5 mb-20 flex justify-between ">
            <h3>Crear perfil de la organización</h3>
            <a class="block bg-red-500 hover:bg-red-300 text-white font-bold p-2 text-md rounded border-b-4 border-red-500" href="{{route('dashboard.create')}}" type="button">
                Crear
            </a>

        </section>
        @else
        <section class="w-mt-72 w-1/2 border-red-300 border-2 rounded-2xl p-5 mb-20 relative">
            <h2 class="text-xl">Perfil de la organización</h2>
            <a class="block bg-red-500 hover:bg-red-300 text-white font-bold p-2 text-md rounded border-b-4 border-red-500 absolute top-5 right-5 text-center" href="{{route('dashboard.edit', $profile->id)}}" type="button">
                Actualizar
            </a>
            <div class="pt-10">
                <h4 class="font-bold mb-3">Nombre:
                    <span class="font-normal">
                        {{$profile->name}}
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
                <h4 class="font-bold mb-3">Cuenta Bancaria:
                    <span class="font-normal">
                        {{$profile->bankAccount}}
                    </span>
                </h4>
                <h4 class="font-bold mb-3"> Bizum:
                    <span class="font-normal">
                        {{$profile->bizum}}
                    </span>
                </h4>

            </div>
        </section>
        @endif

        <section class="w-mt-72 w-1/2 border-red-300 border-2 rounded-2xl p-5 mb-20 flex justify-between ">
            <a class="" href="{{route('about')}}" type="button">
            Qui Som / Quien Somos
            </a>

        </section>
    </main>
</body>

</html>