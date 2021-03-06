<!DOCTYPE html>
<html lang="en">
@include('component.head')

<body class="font-poppins bg-white">
    <!-- Modal toggle -->
    <button class="flex rounded-b-lg px-2 py-2 text-white show-modal bg-mainclr hover:bg-opacity-80" type="button" data-modal-toggle="authentication-modal">
        <p>Laporkan</p>
        <svg class="w-2 h-2 ml-1 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M64 496C64 504.8 56.75 512 48 512h-32C7.25 512 0 504.8 0 496V32c0-17.75 14.25-32 32-32s32 14.25 32 32V496zM476.3 0c-6.365 0-13.01 1.35-19.34 4.233c-45.69 20.86-79.56 27.94-107.8 27.94c-59.96 0-94.81-31.86-163.9-31.87C160.9 .3055 131.6 4.867 96 15.75v350.5c32-9.984 59.87-14.1 84.85-14.1c73.63 0 124.9 31.78 198.6 31.78c31.91 0 68.02-5.971 111.1-23.09C504.1 355.9 512 344.4 512 332.1V30.73C512 11.1 495.3 0 476.3 0z"/></svg>
    </button>
  
    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-mainclr text-white rounded-xl shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd">
                        </path>
                    </svg>  
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-bold">
                        Apakah ada yang membuatmu terganggu?? 
                    </h3>
                    <p class="font-normal">Silahkan ajukan laporanmu dibawah ini</p>
                    {{-- Form --}}
                    <form class="space-y-6 font-light" action="#">
                        <div class="pl-8 pt-1">
                            {{-- checkbox Ujaran kebencian --}}
                            <div class="form-check">
                                <input class="rounded-full" type="checkbox" value="Ujaran kebencian" id="report1">
                                <label class="form-check-label text-sm inline-block" for="flexCheckDefault">
                                    Ujaran kebencian
                                </label>
                            </div>
                            {{-- checkbox Informasi palsu --}}
                            <div class="form-check">
                                <input class="rounded-full" type="checkbox" value="Informasi palsu" id="report2">
                                <label class="form-check-label text-sm inline-block" for="flexCheckDefault">
                                    Informasi palsu
                                </label>
                            </div>
                            {{-- checkbox Kata-kata tidak pantas --}}
                            <div class="form-check">
                                <input class="rounded-full" type="checkbox" value="Kata-kata tidak pantas" id="report3">
                                <label class="form-check-label text-sm inline-block" for="flexCheckDefault">
                                    Kata-kata tidak pantas
                                </label>
                            </div>
                            {{-- checkbox Spam --}}
                            <div class="form-check">
                                <input class="rounded-full" type="checkbox" value="Spam" id="report4">
                                <label class="form-check-label text-sm inline-block" for="flexCheckDefault">
                                    Spam
                                </label>
                            </div>
                            {{-- checkbox Pornografi --}}
                            <div class="form-check">
                                <input class="rounded-full" type="checkbox" value="Pornografi" id="report5">
                                <label class="form-check-label text-sm inline-block" for="flexCheckDefault">
                                    Pornografi
                                </label>
                            </div>
                        </div>
                        {{-- Field hal lain --}}
                        <div class="mt-1">
                            <p class="font-normal">Atau ada hal lain?</p>
                            <textarea id="halain" name="halain" placeholder="Beritahu kami apa yang sedang terjadi"
                            class="w-full lg:w-8/12 mt-1 bg-transparent rounded-lg border border-slate focus:border-white focus:ring-2 focus:ring-white h-32 text-base outline-none py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        {{-- Btn submit --}}
                        <button type="submit" class="text-white bg-orange2 hover:bg-opacity-80 focus:ring-4 focus:outline-none focus:ring-orange2 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Beritahu kami
                        </button>
                    </form>
              </div>
          </div>
          <div class="absolute right-0 top-20">
            <img src="/imgs/astro3.png" width="250" alt="Astro">
        </div>
      </div>
  </div> 
    {{--  --}}
    @include('component.script')
    </body>
</html>