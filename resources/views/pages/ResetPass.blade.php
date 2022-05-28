<!DOCTYPE html>
<html lang="en">
  @include('component.head')
  <body class="">
  <div class="min-h-screen w-full pt-1 bg-no-repeat" style="background-image: url(/imgs/bg-00.png)">
  @include('component.navbar');
    <div class="mx-auto max-w-md rounded-xl shadow-md p-7 mt-24 bg-white bg-opacity-20">
        <div class="p-1">
          <div class="container">
          <img 
                    class="mx-auto w-40" 
                    src="/imgs/logo-resetp.png" 
                    alt="">
                <h1 class="text-3xl mb-5 mt-6 text-white text-center">Atur ulang kata sandi</h1>
                <div class="pb-4 mt-10">
                    <label for="password">
                      <input
                        name="password"
                        type="password"
                        id="password"
                        placeholder="Masukkan Kata Sandi"
                        class="px-7 py-3 border shadow rounded-lg w-full block bg-transparent text-white border-grey focus:outline-none focus:ring-1 focus:ring-blue focus:border-blue 
                        @error('password') invalid:focus:ring-red invalid:focus:border-red @enderror peer"
                        autofocus
                      />
                      @error('password')
                        <p
                          class="text-sm mt-1 -mb-3 text-red">
                          Email tidak valid
                        </p>
                      @enderror
                    </label>
                    <label for="confirm pass">
                      <input
                        name="confirm_pass"
                        type="password"
                        id="confirm pass"
                        placeholder="Konfirmasi Kata Sandi"
                        class="px-7 py-3 mt-4 border shadow rounded-lg w-full block bg-transparent text-white border-grey focus:outline-none focus:ring-1 focus:ring-blue focus:border-blue 
                        @error('confirm_pass') invalid:focus:ring-red invalid:focus:border-red @enderror peer"
                        autofocus
                      />
                      @error('confirm_pass')
                        <p
                          class="text-sm mt-1 -mb-3 text-red">
                          Email tidak valid
                        </p>
                      @enderror
                    </label>
                  </div>
                  <p class="text-white mb-0 opacity-50">Minimum 10 kata, harus mengandung huruf besar dan kecil, nomor dan simbol</p>
                  <div class="pt-4">
                    <button
                      class="py-3 rounded-lg w-full block text-white bg-orange2 bg-opacity-90 hover:bg-secondaryclr shadow-lg">
                      Kirim verifikasi email
                    </button>
                  </div>
        </div>
        </div>
    </div>
  </div>
  </body>
  @include('component.Footer')
</html>