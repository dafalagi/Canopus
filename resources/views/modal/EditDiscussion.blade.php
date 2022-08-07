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
                <form class="space-y-6 font-light" action="/discusses/{{ $discuss->slug }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="relative">
                        {{-- Field judul diskusi --}}
                        <div class="relative pb-1">
                            <input type="text" id="headerDiskusi" name="title" class="block px-2.5 pb-2.5 pt-4 w-full text-base text-white bg-transparent rounded-lg border-1 border-gray-300 appearance-none peer" placeholder=" " 
                            value="{{ old('title', $discuss->title) }}"/>
                            <label for="headerDiskusi" class="absolute text-white text-base font-normal duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-thirdclr px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Masukkan judul disini
                        </div>
                        {{-- Field buat diskusi --}}
                        <div class="pb-1">
                            <textarea id="IsiDiskusi" name="body" placeholder="Lorem ipsum"
                            class="w-full lg:w-8/12 bg-transparent rounded-lg placeholder-white border border-white focus:border-white focus:ring-2 focus:ring-white h-44 text-base outline-none py-3 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('body', $discuss->body) }}</textarea>
                        </div>
                        {{-- Input File img --}}   
                        <div class="pb-5">
                            <label class="block mb-1 text-sm font-medium text-white" for="file_input">Masukan foto jika diinginkan:</label>
                            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-full cursor-pointer dark:text-gray-400 focus:outline-none" id="file_input" type="file"
                            name="picture">
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
