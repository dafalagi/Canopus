<!DOCTYPE html>
<html lang="en">
  @include('component.head')
  <body class="font-poppins">
    <div class="bg-mainclr">
    @include('.component.navbar')
    @if (session()->has('success'))
      @include('.component.AlertSuccess')
    @endif
      <h1 class="font-bold pb-3 text-center mt-7 mb-7 text-2xl text-white">Selamat datang di Forum Canopus, Astroners!</h1>
        <div class="flex flex-auto">
            <div class="lg:ml-7 basis-1/3 sidebar lg:left-0 p-3 overflow-y-auto">
              <div class="text-gray-900 text-xl">
                <h1 class="text-white text-lg pl-14 pb-6">Menu</h1>
                <a href="" class="relative flex items-center">
                  <img 
                    class="w-6 absolute ml-4 pointer-events-none" 
                    src="/imgs/home.png" 
                    alt=""/>
                    <span class="p-1 text-lg text-white ml-11 hover:text-secondaryclr">Beranda</span>
                </a>
                @auth
                  <a href="/discusses?user={{ auth()->user()->username }}" class="relative flex items-center">
                    <img 
                      class="w-6 absolute ml-4 pointer-events-none" 
                      src="/imgs/myTopik.png" 
                      alt=""/>
                      <span class="p-1 text-lg text-white ml-11 hover:text-secondaryclr">Topik saya</span>
                  </a>
                  <a href="/discusses?answer={{ auth()->user()->username }}" class="relative flex items-center">
                    <img 
                      class="w-6 absolute ml-4 pointer-events-none" 
                      src="/imgs/myComment.png" 
                      alt=""/>
                      <span class="p-1 text-lg text-white ml-11 hover:text-secondaryclr">Jawaban saya</span>
                  </a>
                @endauth
              </div>
              <div class="absolute">
                <img 
                    class="w-64  my-24" 
                    src="/imgs/astronot_2.png" 
                    alt=""/>
              </div>
            </div>
            <div class="basis-full py-3 pl-8 bg-grey-50">
              <form action="/discusses">
                {{-- <div class="relative flex justify-center">
                    <img 
                      class="w-6 absolute left-0 ml-4 pointer-events-none" 
                      src="/imgs/searchIcon.png" 
                      alt=""/>
                    <input 
                      type="text"
                      name="search"
                      placeholder="Cari topik lainnya"
                      autocomplete="off"
                      class=" w-5/6 py-2 font-semibold placeholder-gray-50 text-black rounded-xl border-none ring-2 ring-gray-300 focus:ring-grey-50 focus:ring-2 shadow-lg"
                      value="{{ request('search') }}">
                </div> --}}
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                    <div class="relative w-4/5 mb-3 mx-auto">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                        </div>
                        <input 
                            type="text" 
                            id="default-search" 
                            class="block p-2 pl-10 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari topik lainnya" 
                            name="search"
                            value="{{ request('search') }}">
                    </div>
              </form>
              <div class="mx-auto">
                @php
                    if(auth()->user())
                    {
                      $favorites = auth()->user()->favorites;
                    }
                @endphp
                @if (!$discusses->first())
                  <div class="fill-white">
                    <p>Not Found</p>
                  </div>
                @else
                  @foreach ($discusses as $discuss)
                    @php
                        if(isset($favorites))
                        {
                          $favorite = $favorites->whereIn('discuss_id', $discuss->id);
                        }

                        $likes = $discuss->likes->whereIn('discuss_id', $discuss->id);
                    @endphp
                    @include('component.bodyForum')
                  @endforeach
                @endif
              </div>
            </div>

            <div class=" text-right basis-1/3 w-32 h-10 mr-16">
              <button class="px-6 py-5 rounded-lg text-white bg-[#FF9119] hover:bg-opacity-80 shadow-lg" type="button" data-modal-toggle="Adddiscussion-modal">
                + Mulai dengan topik baru
              </button>
              @include('.modal.AddDiscussion')
              <div class="absolute">
                <img 
                    class="w-64 mx-7 my-16" 
                    src="/imgs/astronot.png" 
                    alt=""/>
              </div>
            </div>
          </div>
          {{-- @foreach ($discusses as $discuss)
            @include('.component.bodyForum')
          @endforeach --}}
        <div class="flex justify-center pr-44 pt-5 pb-8">
          {{ $discusses->links() }}
        </div>
        {{-- <div class="flex items-center justify-center pt-24 pb-9">
          <div class="flex select-none space-x-1">
            
            <a href="#" class="rounded-md bg-gray-200 px-4 py-2 transition duration-200 hover:bg-secondaryclr">
              <img 
                class="w-4 absolute -mx-2.5 pointer-events-none" 
                src="/imgs/leftArrow.png" 
                alt=""/>
            </a>
            <a href="#" class="rounded-md bg-secondaryclr px-4 py-2"> 1 </a>
            <a href="#" class="rounded-md bg-gray-200 px-4 py-2 transition duration-200 hover:bg-secondaryclr"> 2 </a>
            <a href="#" class="rounded-md bg-gray-200 px-4 py-2 transition duration-200 hover:bg-secondaryclr"> 3 </a>
            <span class="rounded-md px-4 py-2 transition duration-200 hover:bg-secondaryclr"> ... </span>
            <a href="#" class="rounded-md bg-gray-200 px-4 py-2 transition duration-200 hover:bg-secondaryclr"> 10 </a>
            <a href="#" class="rounded-md bg-gray-200 px-4 py-2 transition duration-200 hover:bg-secondaryclr">
              <img 
                class="w-4 absolute -mx-1.5 pointer-events-none" 
                src="/imgs/rightArrow.png" 
                alt=""/></a>
          </div>
        </div> --}}
        </div>
    </div>
  </body>
  @include('component.Footer')
</html>
