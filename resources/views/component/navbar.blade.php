            <nav class="flex items-center bg-transparent">
              <div class="flex items-center w-screen justify-start ">
                <a href="#"><img 
                  class="mx-auto w-60" 
                  src="/imgs/logo2.png" 
                  alt=""></a>
              </div>
              <div class="flex items-center gap-1">
                <a href="/" class="px-4 py-2 
                  {{ Request::is('/') ? 'text-secondaryclr' : 'text-white hover:bg-secondaryclr transition duration-200 rounded-lg' }} ">
                  Beranda
                </a>
                <a href="/contents" class="px-6 py-2 
                  {{ Request::is('contents') ? 'text-secondaryclr w-max' : 'w-max text-center text-white hover:bg-secondaryclr transition duration-200 rounded-lg' }} ">
                  Samudra angkasa
                </a>
                <a href="/discusses" class="px-4 py-2 
                  {{ Request::is('discusses') ? 'text-secondaryclr' : 'text-white hover:bg-secondaryclr transition duration-200 rounded-lg' }} ">
                  Forum
                </a>
                <a href="/about" class="px-4 py-2 
                  {{ Request::is('about') ? 'text-secondaryclr' : 'text-white hover:bg-secondaryclr transition duration-200 rounded-lg' }} ">
                  Tentang
                </a>
              </div>
              <div class="flex items-center w-screen gap-x-2 justify-end mr-6">
                  @auth
                  <a href="#">
                    @include('modal.Profile')
                  </a>
                  @else
                    <a href="/login" class="text-white">Login</a>
                  @endauth
              </div>
            </nav>