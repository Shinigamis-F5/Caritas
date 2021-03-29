<h2 class="text-h3 lg:text-h2 flex text-center justify-center mb-6">{{__('nav-que-puedes-hacer-tu')}}</h2>
    <div class="flex justify-center text-body lg:text-d-body">
     
      <x-cards filename="{{ $volunteerImg }}" titleCard="{{__('volunteer-title-card')}}" button="Voluntariado">
        @if(app()->getLocale() == 'es' )  {!! html_entity_decode($volunteerEs) !!}
        @else  {!! html_entity_decode($volunteerCat) !!}
        @endif
        <x-button txt="{{ __('volunteer-btn') }}" url="mailto:santjosepbdn@gmail.com" normal-url></x-button>
        
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $explainTheProjectImg }}" titleCard="{{__('explain-the-project-title-card')}}" button="Difundir">
        @if(app()->getLocale() == 'es')  {!! html_entity_decode($explainTheProjectEs) !!}
        @else  {!! html_entity_decode($explainTheProjectCat) !!}
        @endif
        <x-button txt="{{ __('explain-the-project-btn') }}" url="mailto:santjosepbdn@gmail.com" normal-url></x-button>
      
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $partnerImg }}" titleCard="{{__('partner-title-card')}}" button="Colaborar">
        @if(app()->getLocale() == 'es')  {!! html_entity_decode( $partnerEs) !!}
        @else  {!! html_entity_decode($partnerCat) !!}
        @endif
        <x-button txt="{{ __('partner-btn') }}" url="mailto:santjosepbdn@gmail.com" normal-url></x-button>
       
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $donateImg }}" titleCard="Donar" button="Donar">
        @if(app()->getLocale() == 'es')  {!! html_entity_decode($donateEs) !!}
        @else  {!! html_entity_decode($donateCat) !!}
        @endif
    
          <x-button txt="{{ __('donation-title') }}" normal-modal><x-modals.donation-component /></x-button>
      </x-cards>
    </div>