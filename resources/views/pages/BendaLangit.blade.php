<!DOCTYPE html>
<html lang="en">
  @include('component.head')
  <body class="">
  <div class="h-screen w-full pt-1 bg-no-repeat bg-left-top" style="background-image: url(/imgs/bg-bendalgt.jpg)">
    @include('component.navbar');
      <div class="flex-col text-left my-80 ml-20">
        <div class="text-8xl font-bold text-white font-poppins" name="nama_planet">BUMI</div>
        <div class="text-3xl ml-2 italic mt-2 text-orange2 font-poppins" name="julukan_planet">Planet Biru</div>
        <button class="absolute p-5 bottom-3 right-3 fill-white active:fill-secondaryclr">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
              <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
          </svg>
      </button>
      </div>
  </div>
  <div class="bg-mainclr bottom-0 text-md p-10">
      <div class="flex justify-center font-bold text-2xl">
        <div class="flex-col text-center mx-20">
          <div class="text-orange2 font-poppins">Jarak Dari Bumi</div>
          <div class="text-grey font-poppins" name="jrk_matahari">-</div>
        </div>
        <div class="flex-col text-center mx-20">
          <div class="text-orange2 font-poppins">Koordinat</div>
          <div class="text-grey font-poppins" name="koordinat">-</div>
        </div>
      </div>
  </div>
  <div class="h-max w-full p-10" style="background-image: url(/imgs/bg-konten.png)">
    <div class="container rounded-lg w-full mx-auto bg-mainclr p-10 text-white">
      <h1 class="text-3xl font-bold underline ml-12">Bumi</h1>
      <div class="flex text-white mt-10 ml-12">
        <div class="basis-full">
        <div class="flex-col text-justify">
          <div class="text-2xl font-bold font-poppins">Apa itu Bumi?</div>
          <div class="mt-3 font-poppins" name="desc">Bumi (Jawi: ‏بومي‎‎, nama astronomi: Terra[1]) merupakan planet ketiga daripada matahari. Ia merupakan rumah kepada jutaan spesies,[2] termasuklah manusia, bumi juga merupakan satu-satunya tempat di dalam semesta di mana kehidupan diketahui wujud.
          Hasil kajian sains, 
          planet ini telah dibentuk kira-kira 4.54 bilion tahun yang lalu,[3][4][5][6]. Jarak purata Bumi dengan matahari adalah 149.6 juta kilometer dari Matahari. Lapisan udara dan medan magnet 
          yang dipanggil magnetosfera yang melindung permukaan Bumi daripada angin suria, sinaran 
          ultra merbahaya, dan radiasi dari angkasa lepas. Lapisan udara ini menyelitupi bumi sehingga 
          Bumi (Jawi: ‏بومي‎‎, nama astronomi: Terra[1]) merupakan planet ketiga daripada matahari. Ia merupakan rumah kepada jutaan spesies,[2] termasuklah manusia, bumi juga merupakan satu-satunya tempat di dalam semesta di mana kehidupan diketahui wujud.
          Hasil kajian sains, 
          planet ini telah dibentuk kira-kira 4.54 bilion tahun yang lalu,[3][4][5][6]. Jarak purata Bumi dengan matahari adalah 149.6 juta kilometer dari Matahari. Lapisan udara dan medan magnet 
          yang dipanggil magnetosfera yang melindung permukaan Bumi daripada angin suria, sinaran 
          ultra merbahaya, dan radiasi dari angkasa lepas. Lapisan udara ini menyelitupi bumi sehingga
          dengan matahari adalah 149.6 juta kilometer dari Matahari. Lapisan udara dan medan magnet 
          yang dipanggil magnetosfera yang melindung permukaan Bumi daripada angin suria, sinaran 
          ultra merbahaya, dan radiasi dari angkasa lepas. Lapisan udara ini menyelitupi bumi sehingga
          </div>
            <div class="text-2xl font-bold pt-5 font-poppins">Sejarah Bumi</div>
              <div class="mt-3 font-poppins" name="desc">Bumi tempat segenap makhluk hidup termasuk manusia telah terbentuk kira-kira 4,600,000,000 tahun lalu bersamaan dengan planet-planet lain yang membentuk sistem suria dengan matahari sebagai pusatnya.
              Sejarah kehidupan di Bumi baru dimulai sekitar 3,500,000,000 tahun lalu dengan munculnya mikroorganisme sederhana iaitu bekteria dan alga. Kemudian pada 1,000,000,000 tahun lalu baru muncul organisme bersel banyak.
              Pada sekitar 540,000,000 tahun lalu secara bertahap kehidupan yang lebih komplek mulai berevolusi. Perkembangan tumbuhan pertama adalah pteridofita (tumbuhan paku), Gimnosperma (tumbuhan berujung) dan terakhir angiosperma 
              (tumbuhan berbunga). Sedangkan perkembangan haiwan dimulai dari invertebrata, ikan, amfibia, reptilia, burung dan terakhir mamalia, kemudian terakhir kali muncul manusia. Masa Arkaeozoik dan Proterozoikc bersama-sama dikenal 
              sebagai masa prakambriu  
              </div>
        </div>
        </div>
        <div class="basis-2/4">
          <div class="flex-col text-center mx-20">
            <div class="text-2xl font-bold font-poppins">Foto</div>
            <div class="pt-0 rounded-lg">
            @include('component.carouselfoto')
            </div>
            <div class="pt-5">
              <img class="w-auto" src="/imgs/Astro.png" alt="">
            </div>
          </div>
        </div>
      </div>
       @include('component.cardbendalgt')
    </div>
    <div class="container rounded-lg w-full mx-auto bg-mainclr p-10 mt-10 text-white">
      <h1 class="text-3xl font-bold underline text-center font-poppins">Planet Lainnya</h1>
      <div class="grid grid-cols-3 gap-4 place-items-stretch px-10 mt-10">
        @include('component.cardPlanet')
        
      </div>
    </div>
  </div>
  @include('component.Footer')
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
  </body>
</html>