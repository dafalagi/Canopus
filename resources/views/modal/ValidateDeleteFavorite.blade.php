@include('.component.head')
<button class="flex p-5 bottom-3 right-3 fill-secondaryclr show-modal">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
        <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
    </svg>
</button>
<div class="modal hidden">
    <div class="h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50">
        <!-- modal -->
        <div class="bg-mainclr rounded-xl shadow-lg w-1/3">
            <!-- modal header -->
                <div>
                    <img 
                        class="w-36 mx-auto m-10" 
                        src="/imgs/hapusFavorit.png" 
                        alt=""/>
                </div>
            <div>
                <h3 class="text-center font-bold text-white text-2xl">Hapus favorit</h3>
            </div>
            <!-- modal body -->
            <div class="mt-3 mr-24 ml-24 text-white text-center text-sm">
                Apakah kamu yakin ingin menghapus item favorit ini?? Ketika kamu menghapus  item favorit ini, kamu tidak akan melihat item favorit ini lagi loh.
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
</script>