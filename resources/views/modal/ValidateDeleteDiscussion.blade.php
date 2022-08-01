{{-- @include('.component.head')
<div>
        <button class=" flex bg-mainclr text-white rounded-t-lg m-5 show-modal p-5">
            <svg class="w-5 h-5 fill-white mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"/></svg>
            Hapus diskusi
        </button>
</div>
<div class="modal hidden">
    <div class="h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50">
        <!-- modal -->
        <div class="bg-mainclr rounded-xl shadow-lg w-1/3">
            <!-- modal header -->
                <div>
                    <img 
                        class="w-36 mx-auto m-10" 
                        src="/imgs/hapusDiskusi.png" 
                        alt=""/>
                </div>
            <div>
                <h3 class="text-center font-bold text-white text-2xl">Hapus diskusi</h3>
            </div>
            <!-- modal body -->
            <div class="mt-3 mr-24 ml-24 text-white text-center text-sm">
                Apakah kamu yakin ingin menghapus diskusi ini?? Ketika kamu menghapus diskusi ini, kamu tidak akan melihat diskusi ini lagi loh.
            </div>
            <div class="flex p-12 justify-center">
                <a href="#" class="bg-white mr-10 px-7 py-2 ring-2 ring-secondaryclr rounded-md text-secondaryclr text-center">
                    Hapus
                </a> 
                <button class=" bg-secondaryclr ring-2 ring-secondaryclr px-7 py-2 rounded-md text-white close-modal text-center">Tutup</button>
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
</script> --}}

<div id="deleteDiscussion-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center" aria-modal="true" role="dialog">
    <div class="relative p-8 w-full max-w-md h-full md:h-auto">
        <div class="relative bg-mainclr rounded-xl shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="deleteDiscussion-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
              <img class="w-36 mx-auto" src="/imgs/hapusDiskusi.png" alt="hapusDiskusi"/>
                <h3 class="mb-1 text-lg font-bold text-white mt-4">Hapus Diskusi</h3>
                <p class="text-sm mb-8 font-light text-gray-200">Apakah kamu yakin ingin menghapus diskusi kamu?? Ketika kamu menghapus diskusimu, kamu tidak akan memiliki akses kembali ke diskusi Canopus kamu loh.</p>
                <div class="mx-auto">
                    {{-- form button --}}
                    <form action="/discusses/{{ $discuss->slug }}" method="POST">                        
                        @method('delete')
                        @csrf
                        <button type="submit" class="bg-white hover:bg-secondaryclr mr-7 px-7 py-2 ring-2 ring-secondaryclr hover:ring-white rounded-md text-secondaryclr hover:text-white text-center">
                          Hapus
                        </button>
                        <button data-modal-toggle="deleteDiscussion-modal" type="button" class="bg-[#FF9119] hover:bg-white px-7 py-2 ring-2 ring-secondaryclr rounded-md text-white hover:text-secondaryclr text-center">
                          Tutup
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>