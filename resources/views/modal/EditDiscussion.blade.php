<!-- Modal toggle -->
{{-- <button class="block py-2 px-4 hover:bg-thirdclr hover:text-secondaryclr" type="button" data-modal-toggle="EditDiscussion-modal">
    <svg class="w-4 absolute fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"/></svg>
    <span class="ml-6">Edit Diskusi</span>
</button> --}}

<!-- Main modal -->
<div id="EditDiscussion-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative pt-4 px-4 bg-thirdclr text-white rounded-xl shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="EditDiscussion-modal">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd">
                    </path>
                </svg>  
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-bold text-center">
                    Edit diskusi 
                </h3>
                {{-- Form --}}
                <form class="space-y-6 font-light" action="#">
                    <div class="relative">
                        {{-- Field buat diskusi --}}
                        <div class="pb-1">
                            <textarea id="IsiDiskusi" name="IsiDiskusi" placeholder="Lorem ipsum"
                            class="w-full lg:w-8/12 bg-transparent rounded-lg placeholder-white border border-white focus:border-white focus:ring-2 focus:ring-white h-44 text-base outline-none py-3 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        {{-- Input File img --}}   
                        <div class="pb-5">
                            <label class="block mb-1 text-sm font-medium text-white" for="file_input">Masukan foto jika diinginkan:</label>
                            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-full cursor-pointer dark:text-gray-400 focus:outline-none" id="file_input" type="file">
                        </div>                            
                        {{-- Btn submit --}}
                        <div class="absolute pt-3 right-0">
                            <button type="submit" class="text-white bg-[#FF9119] hover:bg-opacity-80 focus:ring-4 focus:outline-none focus:ring-orange2 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Edit
                            </button>
                        </div>
                        <div class="pl-8 -mb-5">
                            <img src="/imgs/astro-dis1.png" width="300" alt="astro">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
{{--  --}}
@include('component.script')
