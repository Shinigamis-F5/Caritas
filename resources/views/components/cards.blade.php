@props(['titleCard', 'filename', 'button'])
​
​
<div class="flex flex-row w-11/12 my-5 border-grey-light border p-2 rounded gap-10">
  <div class="w-2/4 ">
    <img class="hidden lg:flex w-full h-full object-cover p-2" src="{{ asset('storage/section/' . $filename) }}" alt="">
  </div>  
    <div class="flex flex-col normal-case">
      <h5 class="font-sans text-h3 lg:text-d-h4">{{ $titleCard }}</h5>
      {{ $slot }}
      
    </div>
</div>