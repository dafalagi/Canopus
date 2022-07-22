<div class="hover:scale-110 transition duration-300 ease-in-out">
    <a href="">    
        <div class="container bg-thirdclr mx-auto p-5 rounded-lg max-w-2xl">  
            {{-- pivot --}}
            <div class="flex absolute py-44">
                <div class="flex-auto">
                    <button>
                        <img 
                                class="w-5" 
                                src="/imgs/UpArrow.png" 
                                alt=""/>
                    </button>
                    <p class="pl-1 text-xs text-white text-opacity-25">{{ $discuss->likes - $discuss->dislikes }}</p>
                    <button>
                    <img 
                                class="w-5" 
                                src="/imgs/DownArrow.png" 
                                alt=""/>
                    </button>
                </div>
            </div>
            {{-- akhir pivot --}}      
            <div class="pl-10">
            <h1 class="font-bold text-xl text-white">{{ $discuss->title }}</h1>
            <p class=" text-white text-xs tracking-wide border-b border-white border-opacity-25 pt-2 pb-4 mb-2">
                {{ $discuss->excerpt }}
                <img class="mt-2 shadow-md rounded-lg bg-secondaryclr" src="imgs/aripmanusiaswag.jfif" width="300" >
                </p>
                <div class="flex">                                
                    <img 
                    class="w-4 absolute" 
                    src="/imgs/profil.png" 
                    alt=""/>
                    <span class="text-white text-xs ml-10">Diunggah oleh</span>                       
                    <span class="text-xs ml-1 text-secondaryclr">{{ $discuss->user->username }}</span>
                    <span class="text-xs text-white text-opacity-25 ml-2">{{ $discuss->created_at->diffForHumans() }}</span>
                    <div class="flex">                
                    <a href="" class="pl-64 ml-5">
                        <img 
                        class="w-4 pointer-events-none" 
                        src="/imgs/comment.png" 
                        alt=""/></a>
                        <span class="text-xs pl-1 text-white text-opacity-30">{{ count($discuss->comments) }}</span>                  
                    </div>
                </div> 
            </div> 
        </div>
    </a>
</div>
