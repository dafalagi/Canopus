
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verifikasi Email Berhasil</title>
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
    @include('navbar')
        <div class="p-1 pb-40">
          <div class="container">
              <div
                class="mx-auto mt-32 max-w-md rounded-xl shadow-md p-7 bg-white bg-opacity-20">
                <img 
                    class="mx-auto w-40" 
                    src="/imgs/check.png" 
                    alt="">
                <h1 class="font-bold text-3xl mt-6 text-white text-center">Verifikasi Email Terkirim</h1>
                <p class="text-white text-center opacity-40">Mohon periksa email anda kami telah mengirim tautan ke kotak pesan anda</p>
                <h1 class="font-bold text-3xl mt-7 text-white text-center">ikhsan.n.rizki@gmail.com</h1>
              </div>
          </div>
        </div>
    </div>
    @include('.component.Footer')
  </body>
</html>