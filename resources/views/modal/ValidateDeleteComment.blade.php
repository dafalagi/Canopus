@include('.component.head')
<button class=" text-white text-opacity-25 m-5 show-modal">
        Hapus komentar
</button>
<div class="modal hidden">
    <div class="h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50">
        <!-- modal -->
        <div class="bg-mainclr rounded-xl shadow-lg w-1/3">
            <!-- modal header -->
                <div>
                    <img 
                        class="w-36 mx-auto m-10" 
                        src="/imgs/hapusKomentar.png" 
                        alt=""/>
                </div>
            <div>
                <h3 class="text-center font-bold text-white text-2xl">Hapus komentar</h3>
            </div>
            <!-- modal body -->
            <div class="mt-3 mr-24 ml-24 text-white text-center text-sm">
                Apakah kamu yakin ingin menghapus komentar kamu?? Ketika kamu menghapus komentar ini, kamu tidak akan melihat komentar kamu lagi loh.
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