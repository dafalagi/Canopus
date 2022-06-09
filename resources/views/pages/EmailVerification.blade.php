
<!DOCTYPE html>
<html lang="en">
  @include('component.head')
  <body>
    <div class="w-full h-full pl-1 pt-2 bg-no-repeat bg-cover"
    style="background-image: url(/imgs/bg-00.png)">
    @include('.component.navbar')
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