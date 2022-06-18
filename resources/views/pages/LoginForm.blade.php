<!DOCTYPE html>
<html lang="en">
  @include('component.head')

<body class="font-body">
  <div class="w-full h-full bg-no-repeat bg-cover"
  style="background-image: url(/imgs/bg-login.png)"> 
    @include('component.navbar')
    {{-- Username atau Passwoord salah --}}
    @if(session()->has('loginError'))
    <div class="bg-red py-1">
      <p class="text-center text-white">
        {{ session('loginError') }}
      </p>
    </div>
    @endif
    {{--  --}}
    <div>
      <img 
        class="mx-auto w-96 pt-8" 
        src="/imgs/logo2.png" 
        alt="Logo">
      <div class="p-10">
        <div class="container mx-auto">
          <div class="mx-auto max-w-md rounded-xl shadow-md p-12 bg-white bg-opacity-20" >
            <h1 class="font-bold text-3xl text-white">Masuk</h1>
            <p class="text-white">Masuk untuk mengelola akun anda</p>
            <form action="/login" method="POST" class="mt-6">
              @csrf
              <div class="pb-4">
                <label for="email">
                  <input
                    name="email"
                    type="email"
                    id="email"
                    placeholder="Masukkan E-mail"
                    class="px-7 py-3 border shadow rounded-lg w-full block bg-transparent text-white border-grey focus:outline-none focus:ring-1 focus:ring-blue focus:border-blue 
                    @error('email') invalid:focus:ring-red invalid:focus:border-red @enderror peer"
                    autofocus
                    value="{{ old('email', session('email')) }}"
                  />
                  @error('email')
                  <p class="text-sm mt-1 -mb-3 text-red">
                    Email tidak valid
                  </p>
                  @enderror
                </label>
              </div>
              <div class="pb-1">
                <label for="password">
                  <input
                    name="password"
                    type="password"
                    id="password"
                    placeholder="Masukkan kata sandi"
                    class="px-7 py-3 border shadow rounded-lg w-full block bg-transparent text-white border-grey focus:outline-none focus:ring-1 focus:ring-blue focus:border-blue"
                  />
                </label>
              </div>
              <div class="pt-6">
                <button class="py-2 rounded-lg w-full block text-white bg-orange2 bg-opacity-90 hover:bg-secondaryclr shadow-lg">
                      Masuk
                    </button>
              </div>
            </form>
          </div>
        </div>
        <div class="max-w-lg mx-auto text-center mt-6">
            <p class="text-white">Belum memiliki akun?<a href="/register" class="font-bold ml-1 text-orange2 hover:underline">Daftar sekarang</a></p>
        </div>
        <div class="max-w-lg mx-auto text-center mt-1 mb-6">
          <a href="#" class="font-bold ml-1 text-orange2 hover:underline">Lupa kata sandi?</a>
        </div>
      </div>
    </div>
  </div>
</body>
@include('component.Footer')
</html>
