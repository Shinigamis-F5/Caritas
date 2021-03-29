@props(['txt', 'url', 'normal' => '', 'nav' => '', 'normalModal' => '', 'navModal' => '', 'normalUrl' => '', 'navUrl' => '', 'burguer' => '', 'burguerBtn' => '',
'burguerUrl' => ''])

@if ($normal)
    <button class="btn">{{ $txt }}</button>
@endif

@if ($nav)
    <button class="nav__btn">{{ $txt }}</button>
@endif

@if ($normalUrl)
    <a role="button" href="{{ $url }}"><button class="btn btn-space">{{ $txt }}</button></a>
@endif

@if ($navUrl)
    <a role="button" href="{{ $url }}"><button class="nav__btn w-full h-full">{{ $txt }}</button></a>
@endif

@if ($normalModal)
<div x-data="{ open: false }" class="btn">
    <button @click="open = true" class="btn-space">{{ $txt }}</button>
    <div class="modal__overlay" x-show="open">
      <button @click="open = false" class="modal__close">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="modal__close-svg">
            <path d="M24 4.365L19.635 0L12 7.635L4.365 0L0 4.365L7.635 12L0 19.635L4.365 24L12 16.365L19.635 24L24 19.635L16.365 12L24 4.365Z" fill="black"/>
          </svg>
      </button>
      <div class="modal__dialog" @click.away="open = false">
        {{ $slot }}
      </div>
    </div>
</div>
@endif

@if ($navModal)
<div x-data="{ open: false }" class="nav__btn">
    <button @click="open = true" class="w-full h-full">{{ $txt }}</button>
    <div class="modal__overlay" x-show="open">
      <button @click="open = false" class="modal__close">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="modal__close-svg">
            <path d="M24 4.365L19.635 0L12 7.635L4.365 0L0 4.365L7.635 12L0 19.635L4.365 24L12 16.365L19.635 24L24 19.635L16.365 12L24 4.365Z" fill="black"/>
          </svg>
      </button>
      <div class="modal__dialog" @click.away="open = false">
        {{ $slot }}
      </div>
    </div>
</div>
@endif

@if ($burguerBtn)
<div x-data="{ show: false }" class="text-left">
    <button @click="show = true" class="text-ui-main font-bold uppercase w-full h-full text-left">{{ $txt }}</button>
    <div class="modal__overlay" x-show="show">
      <button @click="show = false" class="modal__close">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="modal__close-svg">
            <path d="M24 4.365L19.635 0L12 7.635L4.365 0L0 4.365L7.635 12L0 19.635L4.365 24L12 16.365L19.635 24L24 19.635L16.365 12L24 4.365Z" fill="black"/>
          </svg>
      </button>
      <div class="modal__dialog" @click.away="show = false">
        {{ $slot }}
      </div>
    </div>
</div>
@endif

@if ($burguerUrl)
    <a role="button" href="{{ $url }}"><button class="text-ui-main font-bold uppercase w-full h-full text-left">{{ $txt }}</button></a>
@endif