<!-- Main modal -->
    <div id="ReportComment{{ $comment->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-mainclr text-white rounded-xl shadow">
                <button type="button" data-modal-toggle="ReportComment{{ $comment->id }}" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                    <form class="space-y-6 font-light" action="/reports" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="pl-8 pt-1">
                            <input type="hidden" value="{{ $comment->id }}" name="comment_id">
                            {{-- checkbox Ujaran kebencian --}}
                            <div class="form-check">
                                <input class="rounded-full" type="checkbox" value="Ujaran kebencian" id="report1" name="values[]">
                                <label class="form-check-label text-sm inline-block" for="flexCheckDefault">
                                    Ujaran kebencian
                                </label>
                            </div>
                            {{-- checkbox Informasi palsu --}}
                            <div class="form-check">
                                <input class="rounded-full" type="checkbox" value="Informasi palsu" id="report2" name="values[]">
                                <label class="form-check-label text-sm inline-block" for="flexCheckDefault">
                                    Informasi palsu
                                </label>
                            </div>
                            {{-- checkbox Kata-kata tidak pantas --}}
                            <div class="form-check">
                                <input class="rounded-full" type="checkbox" value="Kata-kata tidak pantas" id="report3" name="values[]">
                                <label class="form-check-label text-sm inline-block" for="flexCheckDefault">
                                    Kata-kata tidak pantas
                                </label>
                            </div>
                            {{-- checkbox Spam --}}
                            <div class="form-check">
                                <input class="rounded-full" type="checkbox" value="Spam" id="report4" name="values[]">
                                <label class="form-check-label text-sm inline-block" for="flexCheckDefault">
                                    Spam
                                </label>
                            </div>
                            {{-- checkbox Pornografi --}}
                            <div class="form-check">
                                <input class="rounded-full" type="checkbox" value="Pornografi" id="report5" name="values[]">
                                <label class="form-check-label text-sm inline-block" for="flexCheckDefault">
                                    Pornografi
                                </label>
                            </div>
                        </div>
                        {{-- Field hal lain --}}
                        <div class="mt-1">
                            <p class="font-normal">Atau ada hal lain?</p>
                            <textarea id="halain" name="values[]" placeholder="Beritahu kami apa yang sedang terjadi"
                            class="w-full lg:w-8/12 mt-1 bg-transparent rounded-lg border border-slate focus:border-white focus:ring-2 focus:ring-white h-32 text-base outline-none py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        {{-- Btn submit --}}
                        <div class="bg-secondaryclr hover:bg-orange-500 rounded-lg w-fit">
                            <button type="submit" class="font-medium text-sm px-5 py-2.5 text-center">
                                Beritahu kami
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="absolute right-0 top-20">
            <img src="/imgs/astro3.png" width="250" alt="Astro">
        </div>
        </div>
    </div>
{{--  --}}