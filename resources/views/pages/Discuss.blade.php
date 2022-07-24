<!DOCTYPE html>
<html lang="en">
@include('component.head')
<body class="font-body">
    <div class="container mx-auto w-full bg-mainclr">
        @include('component.navbar')
            <div class="bg-thirdclr px-6 py-4">
              
              <div class="relative">
              
              <!-- Dropdown menu atas -->
              <button id="menu-btn" data-dropdown-toggle="dropdownBottom" data-dropdown-placement="bottom" class="absolute right-20 mr-3 mb-3 md:mb-0 text-white hover:bg-mainclr font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center " type="button">
                <svg class="w-5  ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    <div id="dropdown" class="absolute right-24 top-10 hidden shadow-lg  bg-mainclr rounded">
                      <ul class="mx-auto" aria-labelledby="dropdownBottomButton">
                        <li>
                          <a href="#" class="block text-sm border-b border-white border-opacity-25 py-3 hover:bg-thirdclr text-white">
                            <svg class="w-4 h-4 absolute fill-white left-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 48V512l-192-112L0 512V48C0 21.5 21.5 0 48 0h288C362.5 0 384 21.5 384 48z"/></svg>
                          <span class="pl-10 mr-4">Simpan</span></a>
                        </li>
                        <li>
                          <a href="#" class="block text-sm py-3 hover:bg-thirdclr text-white">
                            <svg class="w-4 h-4 absolute fill-white left-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"/></svg>
                          <span class="pl-10 mr-4">Edit</span></a>
                        </li>
                        <li>
                          <a href="#" class="block py-3 text-sm hover:bg-thirdclr text-white">
                            <svg class="w-4 h-4 absolute fill-white left-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"/></svg>
                          <span class="pl-10 mr-4">Hapus</span></a>
                        </li>
                        <li>
                          <a href="#" class="block text-sm py-3 hover:bg-thirdclr text-white">
                            <svg class="w-4 h-4 absolute fill-white left-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 496C64 504.8 56.75 512 48 512h-32C7.25 512 0 504.8 0 496V32c0-17.75 14.25-32 32-32s32 14.25 32 32V496zM476.3 0c-6.365 0-13.01 1.35-19.34 4.233c-45.69 20.86-79.56 27.94-107.8 27.94c-59.96 0-94.81-31.86-163.9-31.87C160.9 .3055 131.6 4.867 96 15.75v350.5c32-9.984 59.87-14.1 84.85-14.1c73.63 0 124.9 31.78 198.6 31.78c31.91 0 68.02-5.971 111.1-23.09C504.1 355.9 512 344.4 512 332.1V30.73C512 11.1 495.3 0 476.3 0z"/></svg>
                          <span class="pl-10 mr-4">Laporkan</span></a>
                        </li>
                      </ul>
                    </div>
          
                    <script>
                        window.addEventListener('DOMContentLoaded', ()=> {
                            const menuBtn = document.querySelector('#menu-btn')
                            const dropdown = document.querySelector('#dropdown')
                            
                            menuBtn.addEventListener('click', () => {
                                /* if(dropdown.classList.contains('hidden')){
                                    dropdown.classList.remove('hidden');
                                    dropdown.classList.add('flex');
                                }else{
                                    dropdown.classList.remove('flex')
                                    dropdown.classList.add('hidden')
                                } */
                
                                dropdown.classList.toggle('hidden')
                                dropdown.classList.toggle('flex')
                            })
                        })
                    </script> 

            {{-- akhir dropdown atas --}}
            
            {{-- pivot --}}
            <div class="flex absolute top-1/2 ml-4">
              <div class="flex-auto">
                  <button>
                      <img 
                              class="w-10 mr-10" 
                              src="/imgs/UpArrow.png" 
                              alt=""/>
                  </button>
                  <p class="ml-2.5 text-lg mb-2 text-white text-opacity-25">25</p>
                  <button>
                    <img 
                              class="w-10 mr-10" 
                              src="/imgs/DownArrow.png" 
                              alt=""/>
                  </button>
              </div>
            </div>
            {{-- akhir pivot --}}
              
                {{-- isian --}}
                <div class="static w-full px-24 pb-72">
                  <div class="border-b border-white border-opacity-25 pb-2">
                    <h1 class="mb-2 font-bold text-3xl text-white">{{ $discuss->title }}</h1>                     
                      <img 
                        class="w-6 absolute" 
                        src="{{ $discuss->user->avatar ? asset('storage/'.$discuss->user->avatar) : '/imgs/default/avatar.png' }}" 
                        alt=""/>
                      <span class="text-white text-sm ml-10 pt-6 pb-5">Diunggah oleh</span>                       
                      <span class="text-sm ml-1 text-secondaryclr">{{ $discuss->user->username }}</span>
                      <span class="text-sm text-white text-opacity-30 ml-2">{{ $discuss->created_at->diffForHumans() }}</span>
                  </div>      
                  
                  <p class=" text-white text-base tracking-wide border-b border-white border-opacity-25 pb-6 pt-6 ">
                   {!! $discuss->body !!}
                  <img class="pt-2 shadow-lg" src="imgs/aripmanusiaswag.jfif" width="300" >
                  </p>
                
                  <div class="flex justify-end">                
                    <a href="">
                      <img 
                        class="w-6 pt-5 mx-1 pointer-events-none" 
                        src="/imgs/comment.png" 
                        alt=""/></a>
                      <span class="p-1 text-lg pt-4 text-white text-opacity-30">{{ count($discuss->comments) }}</span>                  
                  </div>
                    <p class="border-b border-white border-opacity-25 mb-6 pt-4"></p>

                  {{-- komentar --}}
                  @foreach ($discuss->comments as $comment)
                  <div class="relative rounded-xl p-4 max-w-sm bg-mainclr">
                    <!-- Dropdown menu bawah -->
                    <button id="menubawah-btn" data-dropdown-toggle="dropdownRight" data-dropdown-placement="right" class="absolute top-0 right-0 md:mb-0 text-white hover:bg-thirdclr font-medium rounded-lg text-sm px-4 py-2.5 text-center items-center " type="button"><svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                      <div id="dropdownbawah" class="absolute -right-28 top-0 bg-mainclr hidden rounded-lg shadow-lg ">
                          <ul class="mx-auto" aria-labelledby="dropdownBottomButton">
                              <li>
                                <a href="#" class="block border-b text-sm border-white border-opacity-25 py-2 hover:bg-thirdclr text-white">
                                  <svg class="w-4 h-4 absolute fill-white left-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"/></svg>
                                <span class="pl-10 mr-4">Hapus</span></a>
                              </li>
                              <li>
                                <a href="#" class="block py-3 text-sm hover:bg-thirdclr text-white">
                                  <svg class="w-4 h-4 absolute fill-white left-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"/></svg>
                                <span class="pl-10 mr-4">Edit</span></a>
                              </li>                        
                              <li>
                                <a href="#" class="block py-3 text-sm hover:rounded-b-lg hover:bg-thirdclr text-white">
                                  <svg class="w-4 h-4 absolute fill-white left-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 496C64 504.8 56.75 512 48 512h-32C7.25 512 0 504.8 0 496V32c0-17.75 14.25-32 32-32s32 14.25 32 32V496zM476.3 0c-6.365 0-13.01 1.35-19.34 4.233c-45.69 20.86-79.56 27.94-107.8 27.94c-59.96 0-94.81-31.86-163.9-31.87C160.9 .3055 131.6 4.867 96 15.75v350.5c32-9.984 59.87-14.1 84.85-14.1c73.63 0 124.9 31.78 198.6 31.78c31.91 0 68.02-5.971 111.1-23.09C504.1 355.9 512 344.4 512 332.1V30.73C512 11.1 495.3 0 476.3 0z"/></svg>
                                <span class="pl-10 mr-4">Laporkan</span></a>
                              </li>
                            </ul>
                          </div>
                
                          <script>
                              window.addEventListener('DOMContentLoaded', ()=> {
                                  const menubawahBtn = document.querySelector('#menubawah-btn')
                                  const dropdownbawah = document.querySelector('#dropdownbawah')
                                  
                                  menubawahBtn.addEventListener('click', () => {
                                      /* if(dropdown.classList.contains('hidden')){
                                          dropdown.classList.remove('hidden');
                                          dropdown.classList.add('flex');
                                      }else{
                                          dropdown.classList.remove('flex')
                                          dropdown.classList.add('hidden')
                                      } */
                      
                                      dropdownbawah.classList.toggle('hidden')
                                      dropdownbawah.classList.toggle('flex')
                                  })
                              })
                          </script> 

                        {{-- akhir dropdown bawah --}}

                    <img 
                        class="w-6 absolute" 
                        src="{{ $discuss->user->avatar ? asset('storage/'.$discuss->user->avatar) : '/imgs/default/avatar.png' }}" 
                        alt=""/>
                    <h3 class="mb-2 ml-10 font-bold text-sm text-white">{{ $comment->user->username }}</h3>
                    <p class="pl-10 text-sm text-white">{!! $comment->body !!}</p>                   

                  </div>
                  @endforeach
                  {{-- batas komentar --}}

                  <div class="relative flex pt-2">                    
                    <a href="#" class="hover:text-blue-400 hover:fill-blue-400 text-white text-xs">
                      <svg class="absolute w-4 "xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg>
                      <span class="pl-5">Suka</span>
                    </a>
                    <a href="#" class="hover:text-blue-400 text-white text-xs pl-3">
                      Balasan {{ $comment->likes }}
                    </a>
                    <p class="ml-5 text-xs text-white text-opacity-25"> | {{ $comment->created_at->diffForHumans() }}</p>                   
                  </div>
                  
                </div>
                {{-- akhir isian --}}

                
            </div>
    </div>
  @include('component.Footer')
</body>
</html>