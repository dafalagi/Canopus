<div class="grid grid-cols-1 gap-44 p-10 ">
    <div class="container -my-36">
      <div class="relative mx-auto max-w-3xl rounded-xl shadow-md p-6 bg-thirdclr">
        <div class="relative">
          <button class="absolute top-0 right-0" id="menu-btn"><img 
            class="w-11" 
            src="/imgs/down arrow.png" 
            alt=""/>
          </button>
          <div class="absolute top-6 right-0 bg-gray-200 hidden flex-col mt-1 p-2 text-sm w-32" id="dropdown">
              <a href="#" class=" flex rounded-t-lg px-6 py-1 text-white bg-mainclr border-b border-white border-opacity-25">Simpan
                <span class="items-center flex-auto">
                  <img
                    class="ml-2 mt-0.5"  
                    src="/imgs/simpan.png" 
                    alt=""/>
                </span>
              </a>
              <a href="#" class="flex rounded-b-lg px-6 py-1 text-white bg-mainclr">Profile
                <span class="items-center flex-auto">
                  <img
                    class="ml-2 mt-0.5"  
                    src="/imgs/laporkan.png" 
                    alt=""/>
                </span>
              </a>
          </div>
        </div>
      <script>
          window.addEventListener('DOMContentLoaded', ()=> {
              const menuBtn = document.querySelector('#menu-btn')
              const dropdown = document.querySelector('#dropdown')
              
              menuBtn.addEventListener('click', () => {
                  /* if(dropdown.classList.contains('hidden')){
                      dropdown.classList.remove('hidden');
                      dropdown.classList.add('flex');
                  }else{
                      dropdown.classList.remove('flex')
                      dropdown.classList.add('hidden')
                  } */
  
                  dropdown.classList.toggle('hidden')
                  dropdown.classList.toggle('flex')
              })
          })
      </script>
      <div class="flex">
        <div class="flex-auto mt-16 items-start">
            <button>
                <img 
                        class="w-6 mr-10" 
                        src="/imgs/UpArrow.png" 
                        alt=""/>
            </button>
            <p class="ml-1 text-white text-opacity-25">25</p>
            <button>
              <img 
                        class="w-6 mr-10" 
                        src="/imgs/DownArrow.png" 
                        alt=""/>
            </button>
        </div>
        <div class="flex-auto">
              <h1 class="mb-5 font-bold text-3xl text-white">Covid-19 Mega Thread</h1>
                <p class="text-white text-sm border-b border-white border-opacity-25 pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
      </div>
          <div class="flex">
            <div class="flex-auto pt-4">
                <img 
                    class="w-8 absolute" 
                    src="/imgs/profil.png" 
                    alt=""/>
                <span class="text-white text-lg ml-12 pt-6 pb-5">Diunggah oleh</span>
                  <a href="" class="relative items-center">
                      <span class="text-lg text-secondaryclr">ikhsan.n.rizki</span>
                  </a>
                <span class="text-lg text-white text-opacity-30 ml-3">2 jam yang lalu</span>
            </div>
          <a href="">
            <img 
              class="w-6 pt-5 mx-1 pointer-events-none" 
              src="/imgs/comment.png" 
              alt=""/>
          </a>
          <span class="p-1 text-lg pt-4 text-white text-opacity-30">69+</span>
      </div>
    </div>
</div>
