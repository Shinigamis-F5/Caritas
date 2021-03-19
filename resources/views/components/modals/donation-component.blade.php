<a href="#"><h1 class="text-h1 text-right mr-6">x</h1></a>
<div id="container" class="bg-white-dark text-black text-center mx-4 text-body lg:text-d-main rounded-3xl">
    <h1 class="text-h1 m-4"> {{__('donation-title')}}</h1>
    <p class="my-4 text-ui-main lg:text-d-ui-main">
        {{__('donation-account')}} <br>
    </p>
    <h4 class="text-ui-main lg:text-d-ui-main">
        {{ $profile->bankAccount }} <br>
    </h4>
    <p>
        {{__('donation-bizum')}}<br>
    </p>
    <h4 class="text-ui-main lg:text-d-ui-main">
        {{ $profile->bizum }}
    </h4>

    <h2 class="text-h4 lg:text-d-h4 mt-9">{{__('donation-tax-relief-title')}}</h2>
    <p  class="mb-4">
        <br>
        <br>
        {{__('donation-tax-relief-text')}}
        <x-anchor
        href="mailto:santjosepbdn@gmail.com" 
        txt="santjosepbdn@mail.com"/>{{__('donation-tax-relief-text-2')}} 
        <br>
        {{__('donation-tax-relief-data')}}
        <br>
        {{__('donation-tax-relief-data-entidad')}}         

    </p>
    <div class="flex flex-col items-center border-2 border-red bg-donar bg-center bg-cover rounded-3xl my-10">
       
        <p class="m-2">
            {{__('donation-10')}}
        </p>
        <img class="w-20 h-20 m-4" src="{{ asset('storage/img/milk.png')}}" alt="">
        <p class="m-2">
            {{__('donation-20')}}
        </p>  
        <img class="w-20 h-20 m-4" src="{{ asset('storage/img/pasta.png')}}" alt="">
        <p class="m-2"> 
             {{__('donation-50')}}
        </p>
        <img class="w-32 h-32 m-4" src="{{ asset('storage/img/fish.png')}}" alt="">
        <p class="m-2">
            {{__('donation-+50')}}
        </p>
        <img class="w-20 h-20 m-6" src="{{ asset('storage/img/soap.svg')}}" alt="">
    </div>
</div>