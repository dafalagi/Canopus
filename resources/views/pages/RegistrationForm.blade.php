<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="">
  <div class="min-h-screen w-full pt-8 bg-no-repeat" style="background-image: url(/imgs/bg-regis.png)">
  <img 
        class="mx-auto w-96" 
        src="/imgs/logo2.png" 
        alt="">
    <div class="mx-auto max-w-lg rounded-xl shadow-md p-12 bg-white bg-opacity-20">
        <div class="p-10">
          <div class="container">
                <h1 class="font-bold text-3xl text-center text-white">Buat Akun Anda</h1>
                <p class="text-white text-center">Daftarkan diri anda dan mulai menjelajahi alam semesta</p>
                <form action="/login" method="POST" class="mt-6">
                  <div class="mt-4 pb-4">
                      <label for = "username">
                          <input name="username" type="username" id="usernasme" placeholder="Username" 
                          class="px-7 py-3 border shadow rounded-lg w-full block bg-transparent text-white border-grey focus:outline-none focus:ring-1 focus:ring-blue focus:border-blue"/>
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
                        autofocus
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
                        name="konfirmasi_password"
                        type="password"
                        id="konfirmasi_password"
                        placeholder="Konfirmasi Kata Sandi"
                        class="px-7 py-3 border shadow rounded-lg w-full block bg-transparent text-white border-grey focus:outline-none focus:ring-1 focus:ring-blue focus:border-blue"
                      />
                    </label>
                  </div>
                  <input class="mr-2 leading-tight" type="checkbox">
                    <span class="text-sm text-white">
                        saya menyetujui syarat dan ketentuan!
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