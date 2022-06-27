@include('component.Head')

<button class="block" type="button" data-modal-toggle="defaultModal">
    <img 
        class="w-8 show-modal" 
        src="/imgs/Vector.png" 
        alt="">
</button>
    
<div id="defaultModal" data-modal-placement="top-right" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed mt-16 top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-3 min-w-fit h-full md:h-auto">
        <div class="relative bg-mainclr rounded-lg shadow dark:bg-gray-700" id="modalbtn">
            <div class="flex justify-between items-start p-4 h-32 bg-cover bg-center rounded-t-lg" style="background-image: url(/imgs/bg-profile.png)">
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="relative p-4 space-y-4">
                <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="absolute top-0 right-0 text-white hover:bg-blue-800 rounded-lg px-4 py-2.5 text-center inline-flex items-center" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5" fill="white" viewBox="0 0 320 512"><path d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"/></svg>
                </button>
            <!-- Dropdown menu -->
                    <div id="dropdown" class=" \z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#" class="flex px-4 py-2 rounded-t-lg text-white bg-mainclr hover:bg-thirdclr dark:hover:bg-gray-600">
                                <img
                                    class="mr-2 w-5"  
                                    src="/imgs/settings.png" 
                                    alt=""/>
                                Pengaturan    
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex px-4 py-2 bg-mainclr text-white hover:bg-thirdclr dark:hover:bg-gray-600">
                                <img
                                    class="mr-2 w-5"  
                                    src="/imgs/favorite.png" 
                                    alt=""/>
                                Favorit
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex px-4 py-2 rounded-b-lg text-red-600 text-red bg-mainclr hover:bg-thirdclr dark:hover:bg-gray-600">
                                <img
                                    class="mr-2 w-5"  
                                    src="/imgs/logout.png" 
                                    alt=""/>
                                Keluar akun
                            </a>
                        </li>
                        </ul>
                    </div>
                        
                    <div class="flex">
                        <div class="basis-1/3">
                            <img 
                                class="w-36 ml-5 mr-5" 
                                src="/imgs/default/default_avatar2.png" 
                                alt="">
                        </div>
                        <div class="basis-3/5">
                            <div class=" text-white text-2xl mb-5">
                                {{ auth()->user()->username }}
                            </div>
                            <div class=" text-white text-left text-sm">
                                {{ auth()->user()->bio }}
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>  
</div>
@include('component.script')