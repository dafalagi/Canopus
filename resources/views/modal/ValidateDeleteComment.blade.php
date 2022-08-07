@php
    if(isset($reply2) && $reply2->id)
    {
        $comment = $reply2;
    }elseif(isset($reply) && $reply->id)
    {
        $comment = $reply;
    }else
    {
        $comment = $comment;
    }
@endphp
<div id="deleteComment-modal-{{ $comment->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center" aria-modal="true" role="dialog">
    <div class="relative p-8 w-full max-w-md h-full md:h-auto">
        <div class="relative bg-mainclr rounded-xl shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="deleteComment-modal-{{ $comment->id }}">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
              <img class="w-36 mx-auto" src="/imgs/hapusKomentar.png" alt="hapusKomentar"/>
                <h3 class="mb-1 text-lg font-bold text-white mt-4">Hapus Komentar</h3>
                <p class="text-sm mb-8 font-light text-gray-200">Apakah kamu yakin ingin menghapus komentar kamu?? Ketika kamu menghapus komentarmu, kamu tidak akan memiliki akses kembali ke komentar Diskusi kamu loh.</p>
                <div class="mx-auto">
                    {{-- form button --}}
                    <form action="/comments/{{ $comment->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="bg-white hover:bg-secondaryclr mr-7 px-7 py-2 ring-2 ring-secondaryclr hover:ring-white rounded-md text-secondaryclr hover:text-white text-center">
                          Hapus
                        </button>
                        <button data-modal-toggle="deleteComment-modal" type="button" class="bg-[#FF9119] hover:bg-white px-7 py-2 ring-2 ring-secondaryclr rounded-md text-white hover:text-secondaryclr text-center">
                          Tutup
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>