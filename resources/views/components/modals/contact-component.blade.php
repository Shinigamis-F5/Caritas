
<div id="container" class="bg-white-dark text-black text-center mx-4 text-mobile-main rounded-3xl">
    <h1 class="text-h1 m-4"> {{__('contact-title')}}</h1>
    
    <div class="flex flex-col items-center border-2 border-red bg-donar bg-center bg-cover rounded-3xl my-10 lg:text-d-ui-main h-full ">
        <p class="my-4 mx-10 w-3/4">
            {{__('contact-text')}} 
        </p>
        <p class="text-h4 lg:text-d-h4">
            {{ $profile->org_email }} <br>
        </p>
        
    </div>
</div>