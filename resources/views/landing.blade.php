<x-layout>
    <x-nav />
    <x-back-to-top />
    <main class="flex flex-col items-center gap-48">
        <section class="w-full" >
            <x-hero />
            <x-iframe src="https://www.youtube.com/embed/FiMvPqisUCU" class="w-full h-72 lg:h-450px"/>
        </section>
    <x-separator />
        <section class="flex flex-row items-center my-10 mx-6 justify-between w-full">
            <img class="hidden rounded-r-imglateral md:flex md:h-350px md:w-48 lg:h-365px lg:w-80" src="{{ asset('storage/img/SectionOneLeft.jpg') }}" alt="Side banner" />
            <div class="flex flex-col gap-12 mx-6 w-660px">
                <h2 class="text-h2 p-3 text-center font-black md:text-d-h3 md:p-0">{{ __('necesidades-basicas-titulo') }}</h2>
                <p class="inline-flex flex-col gap-8 max-w-5xl">
                    <span>
                        <b>{{ __('necesidades-basicas-paragrafo1-destacado1') }}</b> {{ __('necesidades-basicas-paragrafo1') }}
                    </span>
                    <span>
                        {{ __('necesidades-basicas-paragrafo2') }} <b>{{ __('necesidades-basicas-paragrafo2-destacado1') }}</b>
                    </span>
                    <span>
                        {{ __('necesidades-basicas-paragrafo3-parte1') }} <b>{{ __('necesidades-basicas-paragrafo3-destacado1') }}</b>, {{ __('necesidades-basicas-paragrafo3-parte2') }} <b>{{ __('necesidades-basicas-paragrafo3-destacado2') }}</b>.{{ __('necesidades-basicas-paragrafo3-parte3') }}
                    </span>
                    <span>
                        <b>{{ __('necesidades-basicas-paragrafo4-destacado1') }}</b>, {{ __('necesidades-basicas-paragrafo4') }}
                    </span>
                </p>
            </div>
            <img class="hidden rounded-l-imglateral md:flex md:h-350px md:w-48 lg:h-365px lg:w-80" src="{{ asset('storage/img/SectionOneRight.jpg') }}" alt="Side banner" />
        </section>
    <x-separator />
        <section class="flex flex-col items-center gap-20 mx-6 lg:gap-60">
            <x-mini-hero filename="family.svg" alt="" class="gap-4">
                <h2 class="text-h2 text-center font-bold max-w-7xl md:text-d-h3">{{ __('necesidades-familias-titulo') }}</h2>
            </x-mini-hero>
            <div class="flex flex-col gap-24 lg:flex-row lg:flex-wrap lg:justify-around">
                <x-downtick-list title="{{ __('necesidades-familias-seccion1-trabajo') }}">
                    <li>{{ __('necesidades-familias-seccion1-punto1') }}</li>
                    <li>{{ __('necesidades-familias-seccion1-punto2') }}</li>
                    <li>{{ __('necesidades-familias-seccion1-punto3') }}</li>
                </x-downtick-list>
                <x-downtick-list title="{{ __('necesidades-familias-seccion2-titulo') }}">
                    <li>{{ __('necesidades-familias-seccion2-punto1') }}</li>
                    <li>{{ __('necesidades-familias-seccion2-punto2') }}</li>
                </x-downtick-list>
                <x-downtick-list title="{{ __('necesidades-familias-seccion3-titulo') }}" class="w-full">
                    <li>{{ __('necesidades-familias-seccion3-punto1') }}</li>
                    <li>{{ __('necesidades-familias-seccion3-punto2') }}</li>
                    <li>{{ __('necesidades-familias-seccion3-punto3') }}</li>
                </x-downtick-list>
            </div>
                <x-mini-hero filename="giving.svg" alt="" class="gap-4" class="lg:flex-row-reverse">
                    <h2 class="text-h2 p-3 text-center items-center font-bold max-w-7xl md:text-d-h3">{{ __('modelo-antiguo-titulo') }}</h2>
                </x-mini-hero>
            <ul class="font-bold text-body gap-12 md:grid md:grid-cols-2 md:grid-rows-2 md:text-d-body md:w-full md:place-items-center">
                    <li class="md:w-350px">{{ __('modelo-antiguo-punto1') }}</li>
                    <li class="md:w-350px">{{ __('modelo-antiguo-punto2') }}</li>
                    <li class="md:w-350px">{{ __('modelo-antiguo-punto3') }}</li> 
                    <li class="md:w-350px">{{ __('modelo-antiguo-punto4') }}</li>
            </ul>
        </section>
    <x-separator />
        <section class="flex flex-col mx-6 gap-40">
        <h2 class="text-h2 text-center p-3 font-bold max-w-7xl place-self-center md:text-d-h3">{{ __('nuestro-modelo-titulo') }}</h2>
            <x-mini-hero filename="innovation.svg" alt="" class="gap-20" class="lg:flex-row-reverse">
                <ul class="font-bold gap-12">
                    <li>{{ __('nuestro-modelo-punto1') }}</li>
                    <li>{{ __('nuestro-modelo-punto2') }}</li>
                    <li>{{ __('nuestro-modelo-punto3') }}</li>
                    <li>{{ __('nuestro-modelo-punto4') }}</li>
                    <li>{{ __('nuestro-modelo-punto5') }}</li>
                </ul>
            </x-mini-hero>
            <x-mini-hero filename="bestof.svg" alt="" class="gap-20">
                <ul class="font-bold gap-12">
                    <li>{{ __('nuestro-modelo-punto6') }}</li>
                    <li>{{ __('nuestro-modelo-punto7') }}</li>
                    <li>{{ __('nuestro-modelo-punto8') }}</li>
                    <li>{{ __('nuestro-modelo-punto9') }}</li>
                    <li>{{ __('nuestro-modelo-punto10') }}</li>
                </ul>
            </x-mini-hero>
        </section>
    <x-separator />
        <section class="flex flex-col md:flex-row justify-around w-full mx-3 px-3 max-w-screen-xl">
            <x-iframe src="https://www.youtube.com/embed/sVGOeoHe8hQ" class="lg:h-80 xl:w-375px xl:h-350px"/>
            <x-iframe src="https://www.youtube.com/embed/XHnDWb9FzAM" class="lg:h-80 xl:w-375px xl:h-350px"/>
            <x-iframe src="https://www.youtube.com/embed/sHxuuPIcwbo" class="lg:h-80 xl:w-375px xl:h-350px"/>
        </section>
        <section class="text-center flex flex-col items-center mx-6 gap-20">
            <div class="flex flex-col gap-8">
                <p class="text-h5 font-black md:text-d-h5">{{ __('seccion-videos-subtitulo') }}</p>
                <h2 class="text-h2 font-black max-w-980px md:text-d-h3">{{ __('seccion-videos-titulo') }}</h2>
            </div>
            <x-button txt="{{ __('hero-boton') }}" normal-modal><x-Modals.donation-component /></x-button>
        </section>
    </main>
        <x-footer-component class="mt-20"/>
</x-layout>