<!-- Main modal -->
<div id="modalFailedDiscuss" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-3 w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-gradient-to-t from-mainclr to-red-900 rounded-lg shadow dark:bg-gray-700">
          <div>
              <img 
                  class="pt-10 w-44 mx-auto m-10" 
                  src="/imgs/failed.png" 
                  alt=""/>
          </div>
            <!-- Modal header -->
            <div class="flex justify-between items-start p-2 rounded-t dark:border-gray-600">
                <h3 class="text-3xl font-semibold font-poppins text-white mx-auto">
                    Diskusi gagal dihapus
                </h3>
            </div>
            <!-- Modal body -->
              <div class="mt-3 mr-24 ml-24 font-poppins text-white text-center text-sm">
                  Diskusi kamu gagal dihapus, silakan lakukan kembali.
              </div>
            <!-- Modal footer -->
          <div class="flex items-center p-12 space-x-2 border-gray-200 dark:border-gray-600">
              <button data-modal-toggle="modalFailedDiscuss" type="button" class="mx-auto bg-[#FF9119] text-white font-poppins hover:bg-gray-100 rounded-lg border border-gray-200 text-xl font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Tutup</button>
          </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>