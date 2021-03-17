@props(['href', 'txt', 'container'])

    <a href="{{ $href ?? $href }}" target="_blank" class="place-self-center {{ $container ?? '' }}">
      <img src="{{ asset('storage/logo/nou_logo.png') }}" alt="Logo" {{ $attributes }} />
    </a>
