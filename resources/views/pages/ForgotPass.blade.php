<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lupa Kata Sandi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="w-full h-full pl-1 pt-2 bg-no-repeat bg-cover"
    style="background-image: url(/imgs/bg-00.png)">
    @include('.component.navbar')
        <div class="p-1 pb-40">
          <div class="container">
              <div
                class="mx-auto mt-16 max-w-md rounded-xl shadow-md p-7 bg-white bg-opacity-20">
                <img 
                    class="mx-auto w-40" 
                    src="/imgs/forgotPass.png" 
                    alt="">
                <h1 class="text-3xl mb-5 mt-6 text-white">Lupa Kata Sandi?</h1>
                <p class="text-white mb-6 opacity-50">Mohon masukkan email anda yang sudah terdaftar kami akan mengirimkan tautan untuk membantu anda mengatur ulang kata sandi</p>
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
                          class="text-sm mt-1 -mb-3 text-red">
                          Email tidak valid
                        </p>
                      @enderror
                    </label>
                  </div>
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
    @include('.component.Footer')
  </body>
</html>