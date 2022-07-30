<div class="grid grid-cols-1 p-5 ">
  <div class="container">
    <div class="relative mx-auto max-w-4xl rounded-xl shadow-md p-3 bg-thirdclr">
      <button id="dropdownForum" data-dropdown-toggle="dropdownfrm" class="absolute text-white top-0 right-0 hover:bg-mainclr rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
        <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M19 9l-7 7-7-7"></path></svg>
      </button>
        <!-- Dropdown menu -->
        <div id="dropdownfrm" class="z-10 hidden w-32 divide-y bg-mainclr divide-gray-100 rounded-lg shadow dark:bg-gray-700">
            <ul class="text-sm text-gray-700" aria-labelledby="dropdownForum">
              <li>
                @if (isset($favorite) && $favorite->isNotEmpty() && $favorite->first()->discuss_id == $discuss->id)
                  <!-- Setelah tersimpan -->
                  <form action="/favorites/delete/{{ $favorite->first()->id }}" method="POST">
                    @csrf
                    <button class="border-b flex px-l py-2 left-0 rounded-t-lg w-full text-white hover:bg-thirdclr dark:hover:bg-gray-600">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-5 fill-white" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                        Tersimpan   
                    </button>
                  </form>
                @else
                  <form action="/favorites/discuss/{{ $discuss->slug }}" method="POST">
                    @csrf
                    <button class="border-b flex pl-3 py-2 left-0 rounded-t-lg w-full text-white hover:bg-thirdclr dark:hover:bg-gray-600">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 fill-white" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 48V512l-192-112L0 512V48C0 21.5 21.5 0 48 0h288C362.5 0 384 21.5 384 48z"/></svg>
                        Simpan    
                    </button>
                  </form>
                @endif
              </li>
              <li>
                <button class="flex pl-3 py-2 rounded-b-lg left-0 w-full show-modal text-white hover:bg-thirdclr dark:hover:bg-gray-600" type="button" data-modal-toggle="authentication-modal">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 fill-white" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM232 152C232 138.8 242.8 128 256 128s24 10.75 24 24v128c0 13.25-10.75 24-24 24S232 293.3 232 280V152zM256 400c-17.36 0-31.44-14.08-31.44-31.44c0-17.36 14.07-31.44 31.44-31.44s31.44 14.08 31.44 31.44C287.4 385.9 273.4 400 256 400z"/></svg>
                    Laporkan
                </button>
              </li>
            </ul>
        </div>
                    {{-- <p class=" text-slate text-sm text-center text-opacity-50">{{ $discuss->likes-$discuss->dislikes }}</p> --}}
        <a href="/discusses/{{ $discuss->slug }}">
          <div class="pl-2">
                <h1 class="mb-5 font-bold text-xl pr-32 text-white">{{ $discuss->title }}</h1>
                <p class="text-white text-sm tracking-wide border-b border-white border-opacity-25 pr-2 pb-6">{{ $discuss->excerpt }}</p>
          </div>
        </a>
        <div class="flex pl-2">
          <div class="flex-auto pt-4">
              <img 
                  class="w-6 absolute rounded-full shadow-2xl aspect-square" 
                  src="{{ $discuss->user->avatar ? asset('uploads/'.$discuss->user->avatar) : '/imgs/default/avatar.png' }}" 
                  alt=""/>
              <span class="text-white text-base ml-9 pt-6">Diunggah oleh</span>
              <span class="relative items-center text-base ml-1 mr-1 text-secondaryclr">{{ $discuss->user->username }}</span>
              <span class="text-base text-slate text-opacity-50">{{ $discuss->created_at->diffForHumans() }}</span>
          </div>
            @if (auth()->user() && $like)
              <form action="/likes/delete/{{ $like->id }}" method="POST">
                @csrf
                <button class="w-5 pt-5 -mx-6 absolute fill-red-600">
                  {{-- sesudah user menekan tombol lope --}}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg>
                </button>
              </form>
            @else
              <form action="/likes/discuss?discuss_id={{ $discuss->id }}" method="POST">
                @csrf
                <button class="w-5 pt-5 -mx-6 absolute fill-white">
                  {{-- sebelum user menekan tombol lope --}}
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg>
                </button>
              </form>
            @endif
            <span class="p-1 text-lg pt-4 mr-2 text-white">{{ count($likes) }}</span>
            <a href="">
              <img 
                class="w-6 pt-5 mx-1 pointer-events-none" 
                src="/imgs/comment.png" 
                alt=""/>
            </a>
              <span class="p-1 text-lg pt-4 text-white">{{ $discuss->comments->count() }}</span>
        </div>
    </div>
  </div>
</div>
@include('.modal.report')
