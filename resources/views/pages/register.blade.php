<!DOCTYPE html>
<html lang="en">
  @include('component.head')
  <body class="font-poppins">
    <div class="w-full h-full bg-cover bg-no-repeat" style="background-image: url(/imgs/bg-login.png)">
      @include('component.navbar')
  <img 
        class="mx-auto w-96" 
        src="/imgs/logo2.png" 
        alt="">
    <div class="mx-auto max-w-lg rounded-xl shadow-md p-4 bg-slate bg-opacity-10">
        <div class="p-10">
          <div class="container">
                <h1 class="font-bold text-3xl text-white">Buat Akun Kamu</h1>
                <p class="text-white">Daftarkan diri kamu dan mulai menjelajahi alam semesta</p>
                <form action="/register" method="POST" class="mt-6">
                  @csrf
                  <div class="mt-4 pb-4">
                      <label for = "username">
                          <input name="username" type="username" id="username" placeholder="Username" 
                          class="px-3 py-3 border shadow rounded-lg w-full block bg-transparent text-white border-grey focus:outline-none focus:ring-1 focus:ring-blue focus:border-blue"
                          autofocus
                          value="{{ old('username') }}"/>
                      </label>
                  </div>  
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
                        value="{{ old('email') }}"
                      />
                      @error('email')
                        <p
                          class="text-sm mt-1 -mb-3 text-red"
                        >
                          Email tidak valid
                        </p>
                      @enderror
                    </label>
                  </div>
                  <div class="pb-4">
                    <label for="password">
                      <input
                        name="password"
                        type="password"
                        id="password"
                        placeholder="Kata Sandi"
                        class="px-7 py-3 border shadow rounded-lg w-full block bg-transparent text-white border-grey focus:outline-none focus:ring-1 focus:ring-blue focus:border-blue"
                      />
                    </label>
                  </div>
                  <div class="pb-1">
                    <label for="konfirmasi_password">
                      <input
                        name="confirm_password"
                        type="password"
                        id="konfirmasi_password"
                        placeholder="Konfirmasi Kata Sandi"
                        class="px-7 py-3 border shadow rounded-lg w-full block bg-transparent text-white border-grey focus:outline-none focus:ring-1 focus:ring-blue focus:border-blue"
                      />
                    </label>
                  </div>
                  <input class="mr-2 leading-tight" type="checkbox" required>
                    <span class="text-sm text-white">
                        Saya menyetujui syarat dan ketentuan!
                    </span>
                  <div class="pt-6">
                    <button
                      class="py-2 rounded-lg w-full block text-white bg-orange2 bg-opacity-90 hover:bg-secondaryclr shadow-lg"
                    >
                      Masuk
                    </button>
                  </div>
                </form>
          </div>
        <div class="max-w-lg mx-auto text-center mt-6">
            <p class="text-white">Sudah memiliki akun?<a href="#" class="font-bold ml-1 text-orange2 hover:underline">Masuk sekarang</a></p>
        </div>
        </div>
    </div>
  </div>
  </body>
  @include('component.Footer')
</html>