@include('.component.head')
<div>
    <img 
        class="mx-auto w-8 show-modal" 
        src="/imgs/Vector.png" 
        alt="">

</div>
<div class="modal hidden">
    <div class="h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50">
        <!-- modal -->
        <div class="bg-mainclr pb-32 relative rounded-xl shadow-lg w-1/3">
            <button>
                <img 
                    class="absolute w-10 close-modal pl-4 pt-4" 
                    src="/imgs/arrow-back.png" 
                    alt="">
            </button>
            <div class="relative">
                <button class="absolute top-0 right-0" id="menu-btn"><img 
                  class="w-11" 
                  src="/imgs/down arrow.png" 
                  alt=""/>
                </button>
                <div class="absolute top-6 right-0 bg-gray-200 hidden flex-col mt-1 p-2 text-sm w-36" id="dropdown">
                    <a href="/settings" class=" flex rounded-t-lg py-1 text-center pl-2 text-white bg-mainclr">
                        <img
                          class="ml-2 mt-0.5 w-5"  
                          src="/imgs/settings.png" 
                          alt=""/>
                        <p class="ml-2">
                            Pengaturan
                        </p>
                    </a>
                    <a href="/favorites" class="flex px-2 py-1 text-center text-white bg-mainclr">
                        <img
                          class="ml-2 mt-0.5 w-5"  
                          src="/imgs/favorite.png" 
                          alt=""/>
                        <p class="ml-2">
                            Favorit
                        </p>
                        <div class="flex rounded-b-lg px-2 py-1 text-red bg-mainclr">
                            <form action="/logout" method="POST">
                                <img
                                class="ml-2 mt-0.5 w-5"  
                                src="/imgs/logout.png" 
                                alt=""/>
                                <button class="ml-2">Keluar Akun</button>
                            </form>
                        </div>
                </div>
              </div>
            <div>
                <img 
                    class="mx-auto rounded-t-lg" 
                    src="/imgs/bg-profile.png" 
                    alt="">
            </div>
            <div class="absolute left-6 bottom-10 flex">
                <img 
                    class="w-36" 
                    src="{{ auth()->user()->picture }}" 
                    alt="">
                <div class="pl-8 pt-16">
                    <div class=" text-white text-2xl">
                        {{ auth()->user()->username }}
                    </div>
                    <div class=" text-white text-sm">
                        {{ auth()->user()->bio }}
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<script>
    const modal = document.querySelector('.modal');
    
    const showModal = document.querySelector('.show-modal');
    const closeModal = document.querySelectorAll('.close-modal');
    
    showModal.addEventListener('click', function (){
      modal.classList.remove('hidden')
    });
    
    closeModal.forEach(close => {
      close.addEventListener('click', function (){
        modal.classList.add('hidden')
      });
    });
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