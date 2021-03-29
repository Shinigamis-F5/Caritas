<nav id="navBox" class="nav">
@if(app()->getLocale() == 'es')
    <x-button txt="{{ __('nav-idioma-catalan') }}" url="{{ route('language', 'cat') }}" nav-url/>
@else
    <x-button txt="{{ __('nav-idioma-castellano') }}" url="{{ route('language', 'es') }}" nav-url/>
@endif
    <x-button txt="{{ __('nav-quienes-somos') }}" nav-modal><x-Modals.who-we-are-component /></x-button>
    <x-logo-component href="https://www.santjosepbadalona.cat/" class="nav__logo" />
    <x-button txt="{{ __('nav-que-puedes-hacer-tu') }}" nav-modal><x-Modals.what-can-you-do-component /></x-button>
    <x-button txt="{{ __('nav-contacto') }}" nav-modal><x-Modals.contact-component /></x-button>
    <x-burguer-menu />
</nav>

