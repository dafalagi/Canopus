<div class="grid grid-cols-1 p-5 ">
    <div class="container">
      <div class="relative mx-auto max-w-4xl rounded-xl shadow-md p-8 bg-thirdclr">
        <button id="dropdownForum" data-dropdown-toggle="dropdownfrm" class="absolute text-white top-0 right-0 hover:bg-mainclr rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
          <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdownfrm" class="hidden w-auto divide-y bg-mainclr divide-gray-100 rounded-lg shadow dark:bg-gray-700">
            <ul class="text-sm text-gray-700" aria-labelledby="dropdownForum">
              <li>
                @if (isset($favorite) && $favorite->isNotEmpty() && $favorite->first()->discuss_id == $discuss->id)
                  <!-- Setelah tersimpan -->
                  <form action="/favorites/delete/{{ $discuss->slug }}" method="POST">
                    @csrf
                    <button class="border-b flex px-3 py-2 rounded-t-lg w-full justify-center text-white hover:bg-thirdclr dark:hover:bg-gray-600">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-5 fill-white" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                        Tersimpan   
                    </button>
                  </form>
                @else
                  <form action="/favorites/discuss/{{ $discuss->slug }}" method="POST">
                    @csrf
                    <button class="border-b flex px-3 py-2 rounded-t-lg w-full justify-center text-white hover:bg-thirdclr dark:hover:bg-gray-600">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-5 fill-white" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 48V512l-192-112L0 512V48C0 21.5 21.5 0 48 0h288C362.5 0 384 21.5 384 48z"/></svg>
                        Simpan    
                    </button>
                  </form>
                @endif
              </li>
              <li>
                <button class="flex px-4 py-2 rounded-b-lg w-full show-modal justify-center text-white hover:bg-thirdclr dark:hover:bg-gray-600" type="button" data-modal-toggle="authentication-modal">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 fill-white" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM232 152C232 138.8 242.8 128 256 128s24 10.75 24 24v128c0 13.25-10.75 24-24 24S232 293.3 232 280V152zM256 400c-17.36 0-31.44-14.08-31.44-31.44c0-17.36 14.07-31.44 31.44-31.44s31.44 14.08 31.44 31.44C287.4 385.9 273.4 400 256 400z"/></svg>
                    Laporkan
                </button>
              </li>
            </ul>
        </div>
            <div class="flex">
              <div class="flex-auto justify-center text-sm mt-16 mr-7">
                <form action="">
                  <button>
                      <img 
                        class="w-14" 
                        src="/imgs/UpArrow.png" 
                        alt=""/>
                  </button>
                </form>
                  <div class="text-center">
                    <p class=" text-white text-opacity-30">{{ $discuss->likes-$discuss->dislikes }}</p>
                  </div>
                <form action="">
                  <button>
                    <img 
                      class="w-14" 
                      src="/imgs/DownArrow.png" 
                      alt=""/>
                  </button>
                </form>
              </div>
            <a href="/discusses/{{ $discuss->slug }}">
              <div class="flex-auto">
                    <h1 class="mb-5 font-bold text-2xl text-white">{{ $discuss->title }}</h1>
                    <p class="text-white text-sm border-b border-white border-opacity-25 pb-6">{{ $discuss->excerpt }}</p>
              </div>
            </a>
          </div>
            <div class="flex">
              <div class="flex-auto pt-4">
                  <img 
                      class="w-8 absolute" 
                      src="{{ $discuss->user->avatar ? asset('storage/'.$discuss->user->avatar) : '/imgs/default/avatar.png' }}" 
                      alt=""/>
                  <span class="text-white text-lg ml-12 pt-6 pb-5">Diunggah oleh</span>
                  <span class="relative items-center text-lg text-secondaryclr">{{ $discuss->user->username }}</span>
                  <span class="text-lg text-white text-opacity-30 ml-3">{{ $discuss->created_at->diffForHumans() }}</span>
              </div>
            <a href="">
              <img 
                class="w-6 pt-5 mx-1 pointer-events-none" 
                src="/imgs/comment.png" 
                alt=""/>
            </a>
            <span class="p-1 text-lg pt-4 text-white text-opacity-30">{{ $discuss->comments->count() }}</span>
          </div>
      </div>
  </div>
</div>
@include('.modal.report')
