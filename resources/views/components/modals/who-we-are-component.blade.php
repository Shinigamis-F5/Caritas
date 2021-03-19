<h2 class="text-h3 flex text-center justify-center mb-6">{{__('nav-quienes-somos')}}</h2>
<div class="flex justify-center ">
 
    <img class="h-150px  md:h-450px rounded"src="{{ asset('storage/section/' . $aboutImg ) }}" alt="Caritas Logo"/>
</div>
<p class="text-ui-tiny mx-6 my-4 normal-case">
    @if(app()->getLocale() == 'es') {!! html_entity_decode($aboutEs) !!}
    @else {!! html_entity_decode($aboutCat) !!}
    @endif</p>
<x-anchor class="mx-6 my-4" href="#" txt="{{ 'santjosepbdn@gmail.com' }}"/>
