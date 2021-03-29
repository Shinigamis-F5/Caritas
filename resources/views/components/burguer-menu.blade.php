<div x-data="{ open: false }" class="h-24 absolute lg:hidden">
    <button @click="open = true">
        <svg width="64" height="60" viewBox="0 0 64 60" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 18H53" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 30H53" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 42H53" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
        <div class="relative top-0 z-20 p-6 flex flex-col gap-3 rounded-lg uppercase bg-white shadow-2xl" @click.away="open = false" x-show="open">
        @if(app()->getLocale() == 'es')
            <x-button txt="{{ __('nav-idioma-catalan') }}" url="{{ route('language', 'cat') }}" burguer-url/>
        @else
            <x-button txt="{{ __('nav-idioma-castellano') }}" url="{{ route('language', 'es') }}" burguer-url/>
        @endif
            <x-button txt="{{ __('nav-quienes-somos') }}" burguer-btn @click="open = false"><x-modals.who-we-are-component /></x-button>
            <x-button txt="{{ __('nav-que-puedes-hacer-tu') }}" burguer-btn @click="open = false"><x-modals.what-can-you-do-component /></x-button>
            <x-button txt="{{ __('nav-contacto') }}" burguer-btn @click="open = false"><x-modals.contact-component /></x-button>
        </div>
</div>