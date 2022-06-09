            <nav class="flex items-center bg-transparent">
              <div class="flex items-center w-screen justify-start ">
                <a href="#"><img 
                  class="mx-auto w-60" 
                  src="/imgs/logo2.png" 
                  alt=""></a>
              </div>
              <div class="flex items-center gap-x-1">
                <a href="#" class="px-4 py-2 text-white hover:bg-secondaryclr transition duration-200 rounded-lg">Beranda</a>
                <a href="#" class="px-4 py-2 w-40 text-white hover:bg-secondaryclr transition duration-200 rounded-lg">Samudra angkasa</a>
                <p class="px-4 py-2 text-secondaryclr rounded-lg">Forum</p>
                <a href="#" class="px-4 py-2 text-white hover:bg-secondaryclr transition duration-200 rounded-lg">Tentang</a>
              </div>
              <div class="flex items-center w-screen gap-x-2 justify-end mr-6">
                <a href="/login">
                  @auth
                    <form action="/logout" method="POST">
                      @csrf
                      <button><span>Logout</span></button>
                    </form>
                    @else
                    <img 
                    class="mx-auto w-8" 
                    src="/imgs/Vector.png" 
                    alt="">
                  @endauth
                </a>
              </div>
            </nav>