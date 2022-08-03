{{-- Main Modal --}}
<div id="ReplyComment-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative pt-4 px-4 bg-thirdclr text-white rounded-xl shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="ReplyComment-modal">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd">
                    </path>
                </svg>  
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-bold text-center">
                    Balas Komentar
                </h3>
                {{-- Form --}}                
                <form class="space-y-6 font-light" action="/comments" method="POST">
                    @csrf                   
                    <div class="relative">
                        <input type="hidden" name="discuss_id" value="{{ $discuss->id }}">
                        @if (isset($reply))
                            <input type="hidden" name="comment_id" value="{{ $reply->id }}">
                        @elseif(isset($comment))
                            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                        @endif
                        {{-- Field buat komentar --}}              
                        <div class="pb-1">
                            <textarea id="BalasKomentar" name="body" placeholder="Tulis disini..."
                            class="w-full lg:w-8/12 bg-transparent rounded-lg placeholder-white border border-white focus:border-white focus:ring-2 focus:ring-white h-28 text-base outline-none py-3 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>                                                  
                        {{-- Btn submit --}}
                        <div class="absolute pt-3 right-0">
                            <button type="submit" class="text-white bg-[#FF9119] hover:bg-opacity-80 focus:ring-4 focus:outline-none focus:ring-orange2 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Unggah
                            </button>
                        </div>
                        <div class="pl-8 pt-3 pb-5 -mb-5">
                            <img src="/imgs/astro-dis1.png" width="300" alt="astro">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('component.script')