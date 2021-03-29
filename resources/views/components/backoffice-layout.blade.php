@props(['title'])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet">
        <title>{{ $title ?? 'Càritas @ Sant Josep Badalona' }}</title>

        <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
      </head>
    <body id="body" {{ $attributes }}>
      <header class="border-b-2 border-red mb-20 pt-3 px-3">
        <div>
            <h1 class="text-h2 mb-5 text-center">Caritas Escritorio</h1>
            
                <div class="flex justify-between mx-72">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="text-grey hover:text-red text-ui-main ml-3" type="submit">Desconectar</button>
                    </form>
                    <a href="{{ route('home') }}" class="text-grey hover:text-red text-ui-main">Página Principal</a>
                </div>
          
        </div>
    </header>
      {{ $slot }}
     
    </body>
</html>