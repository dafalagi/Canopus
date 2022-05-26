<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="">
    <div class="w-full h-full pt-8 bg-no-repeat bg-cover"
    style="background-image: url(/imgs/bg-login.png)">
      <div>
        <img 
        class="mx-auto w-96" 
        src="/imgs/logo2.png" 
        alt="">
        <div class="p-10">
          <div class="container">
              <div
                class="mx-auto max-w-md rounded-xl shadow-md p-12 bg-white bg-opacity-20"
              >
                <h1 class="font-bold text-3xl text-white">Masuk</h1>
                <p class="text-white">Masuk untuk mengelola akun anda</p>
                <form action="" class="mt-6">
                  <div>
                    <label for="email">
                      <input
                        type="email"
                        id="email"
                        placeholder="Masukan E-mail"
                        class="px-7 py-3 border shadow rounded-lg w-full block bg-transparent text-white border-grey focus:outline-none focus:ring-1 focus:ring-blue focus:border-blue invalid:focus:ring-red invalid:focus:border-red peer"
                      />
                      <p
                        class="text-sm m-0.5 text-red invisible peer-invalid:visible"
                      >
                        Email tidak cocok
                      </p>
                    </label>
                  </div>
                  <div class="pb-1">
                    <label for="password">
                      <input
                        type="password"
                        id="password"
                        placeholder="Masukan kata sandi"
                        class="px-7 py-3 border shadow rounded-lg w-full block bg-transparent text-white border-grey focus:outline-none focus:ring-1 focus:ring-blue focus:border-blue"
                      />
                    </label>
                  </div>
                </form>
                <div class="pt-6">
                  <button
                    class="py-2 rounded-lg w-full block text-white bg-orange2 bg-opacity-90 hover:bg-secondaryclr shadow-lg"
                  >
                    Masuk
                  </button>
                </div>
              </div>
          </div>
        <div class="max-w-lg mx-auto text-center mt-6">
            <p class="text-white">Belum memiliki akun?<a href="#" class="font-bold ml-1 text-orange2 hover:underline">Daftar sekarang</a></p>
        </div>
        <div class="max-w-lg mx-auto text-center mt-1 mb-6">
          <a href="#" class="font-bold ml-1 text-orange2 hover:underline">Lupa kata sandi?</a>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
