{{-- trigger --}}
<div class="block space-y-4 md:flex md:space-y-0 md:space-x-4">
    <button class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="large-modal">
    Large modal
    </button>
</div>

<!-- Large Modal -->
<div id="large-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-10 w-full h-full max-w-4xl">
        <!-- Modal content -->
        <div class="relative bg-mainclr rounded-lg shadow-2xl">
            <!-- Modal body -->
            {{-- Carousel --}}
            <div id="controls-carousel" class="relative" data-carousel="static">
                <div class="overflow-hidden relative aspect-video rounded-t-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/imgs/matahari.png" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="/imgs/meteor.png" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/imgs/Bumi.png" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-10 h-10 rounded-full group-focus:ring-4 group-focus:outline-none">
                        <svg class="w-6 h-6 text-secondaryclr dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-10 h-10 rounded-full group-focus:ring-4 group-focus:outline-none">
                        <svg class="w-6 h-6 text-secondaryclr dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M9 5l7 7-7 7"></path></svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
            {{-- Text body --}}
            <div class="px-12 pt-12 whitespace-normal space-y-2">
                <h1 class="text-xl font-bold subpixel-antialiased leading-relaxed text-white">
                    Bulan yang dimiliki Bumi
                </h1>
                <p class="text-base opacity-80 text-justify subpixel-antialiased leading-3 text-white indent-8">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-center p-6 rounded-b">
                <button data-modal-toggle="large-modal" type="button" class="text-secondaryclr bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-secondaryclr rounded-lg border-2 font-bold border-secondaryclr px-5 py-2">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
