<!DOCTYPE html>
<html lang="en">
@include('component.head')

<body class="font-poppins">
    {{-- Hero section --}}
    <section id="HomeHero" class="w-full h-full bg-no-repeat bg-cover" 
    style="background-image: url(/imgs/bg-home.png)">
        @include('component.navbar')
            <div class="container pt-44 pb-8">
                <div>
                    <div class="w-full px-24 pb-72">
                        <h1 class="text-3xl font-bold text-white">Hello Astroners!<br>Selamat Datang Di Canopus</h1>
                        <p class="text-white py-4 text-opacity-75 leading-relaxed">Sudah siapkah kamu untuk menjelajah<br>luasnya samudra luar angkasa?</p>
                        <a class="py-2 rounded-lg w-32 block text-center text-white bg-orange2 hover:bg-orange-500 shadow-lg transition duration-200"
                        href="/contents" role="button">
                            Let's Go!
                        </a>
                    </div>
                </div>
            </div>
    </section>
    {{-- Forum section --}}
    <section id="HomeForum" class="pt-10 bg-mainclr border-transparent">
        <div class="container bg-no-repeat bg-cover" style="background-image: url(/imgs/astro-forum3.png)">
            <div class="flex">
                <div class="w-full self-end pl-14">
                    <div class="">
                        <img src="/imgs/astro-forum1.png" alt="astro" class="max-w-full mx-auto w-96">
                    </div>
                </div>
                <div class="w-full self-center p-4">
                    <h1 class="underline text-3xl font-bold text-white">Forum</h1>
                    <p class="text-white py-4 text-opacity-75 leading-relaxed">
                        Berdiskusilah dengan Astroners yang lain <br> agar pengetahuanmu semakin luas!
                    </p>
                    <a class="py-2 px-6 rounded-lg text-center text-white bg-orange2 hover:bg-orange-500 shadow-lg transition duration-200"
                    href="/discusses" role="button">
                        Let's Go!
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- About section --}}
    <section section id="HomeAbout" class="w-full h-full p-32 bg-no-repeat bg-cover" 
    style="background-image: url(/imgs/bg-home2.png)">
        <div class="container">
            <div class="pb-12">
                <h1 class="underline text-3xl font-bold text-white text-center">Sekilas tentang Canopus</h1>
            </div>
            <div class="flex">
                <div class="w-full">
                    <div class="bg-black rounded-xl bg-opacity-50 w-80 text-center">
                        <h1 class="pt-5 text-white text-xl font-bold">Canopus?</h1>
                        <p class="p-3 text-white text-opacity-80">
                            Lorem ipsum dolor sit amet,consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <img src="/imgs/astro-about1.png" alt="" class="mx-auto w-64">
                    </div>
                </div>
                <div class="w-full">
                    <div class="bg-black rounded-xl bg-opacity-50 w-80 text-center">
                        <h1 class="pt-5 text-white text-xl font-bold">Tujuan</h1>
                        <p class="p-3 text-white text-opacity-80">
                            Lorem ipsum dolor sit amet,consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <img src="/imgs/astro-about2.png" alt="" class="mx-auto w-64">
                    </div>
                </div>
                <div>
                    <div class="bg-black rounded-xl bg-opacity-50 w-80 text-center">
                        <h1 class="pt-5 text-white text-xl font-bold">Misi</h1>
                        <p class="p-3 text-white text-opacity-80">
                            Lorem ipsum dolor sit amet,consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <img src="/imgs/astro-about3.png" alt="" class="mx-auto w-64">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@include('component.Footer')
</html>