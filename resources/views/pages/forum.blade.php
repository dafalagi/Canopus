<!DOCTYPE html>
<html lang="en">
  @include('component.head')
  <body>
    <div class="bg-mainclr">
    @include('.component.navbar')
      <h1 class="font-bold pb-3 text-center mt-7 mb-7 text-2xl text-white">Selamat datang di Forum Canopus, Astroners!</h1>
        <div class="flex flex-auto">
            <div class="lg:ml-7 basis-1/4 sidebar lg:left-0 p-3 overflow-y-auto">
              <div class="text-gray-900 text-xl">
                <h1 class="text-white text-lg pl-14 pb-6">Menu</h1>
                <a href="" class="relative flex items-center">
                  <img 
                    class="w-6 absolute ml-4 pointer-events-none" 
                    src="/imgs/home.png" 
                    alt=""/>
                    <span class="p-1 text-lg text-white pl-14 hover:text-secondaryclr">Beranda</span>
                </a>
                <a href="" class="relative flex items-center">
                  <img 
                    class="w-6 absolute ml-4 pointer-events-none" 
                    src="/imgs/myTopik.png" 
                    alt=""/>
                    <span class="p-1 text-lg text-white pl-14 hover:text-secondaryclr">Topik saya</span>
                </a>
                <a href="" class="relative flex items-center">
                  <img 
                    class="w-6 absolute ml-4 pointer-events-none" 
                    src="/imgs/myComment.png" 
                    alt=""/>
                    <span class="p-1 text-lg text-white pl-14 hover:text-secondaryclr">Jawaban saya</span>
                </a>
              </div>
              <div class="absolute">
                <img 
                    class="w-64  my-24" 
                    src="/imgs/astronot_2.png" 
                    alt=""/>
              </div>
            </div>
            <div class="basis-5/6 w-full pl-64 py-3 bg-grey-50">
              <form action="">
                          <div class="relative flex items-center">
                              <img 
                                class="w-6 absolute ml-4 pointer-events-none" 
                                src="/imgs/searchIcon.png" 
                                alt=""/>
                          <input 
                              type="text"
                              name="search"
                              placeholder="Cari topik lainnya"
                              autocomplete="off"
                              class=" pr-56 pl-12 py-2 font-semibold placeholder-gray-50 text-black rounded-xl border-none ring-2 ring-gray-300 focus:ring-grey-50 focus:ring-2 shadow-lg">
                          </div>
                      </form>
            </div>
            <div class=" text-right basis-1/3 w-32 h-10 mr-16">
              <button
                    class="px-6 py-5 rounded-lg text-white bg-orange2 bg-opacity-90 hover:bg-secondaryclr shadow-lg">
                    + Mulai dengan topik baru
              </button>
              <div class="absolute">
                <img 
                    class="w-64 mx-14 my-16" 
                    src="/imgs/astronot.png" 
                    alt=""/>
              </div>
            </div>
          </div>
        @include('.component.bodyForum')
        <div class="mx-auto">
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
