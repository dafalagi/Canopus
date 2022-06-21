<!DOCTYPE html>
<html lang="en">
@include('component.head')

<body class="font-poppins bg-mainclr">
    @include('component.navbar')
    <div class="flex min-h-screen p-10">
        {{-- sidebar --}}
        <div class="basis-1/5 text-white">
            <h1 class="text-center text-lg font-bold border-b">Pengaturan</h1>
            <aside class="w-full" aria-label="Sidebar">
                <div class="py-4 px-3">
                    <a href="">
                        <div class="hover:bg-secondaryclr active:bg-secondaryclr items-center text-center p-2 text-base rounded-lg">
                            <p>Akun</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hover:bg-secondaryclr active:bg-secondaryclr items-center text-center p-2 text-base rounded-lg">
                            <p>Password</p>
                        </div>
                    </a>
                </div>
            </aside>
            <div class="mt-10">
                <img src="/imgs/astro1.png" alt="">
            </div>
        </div>
        {{-- Main content --}}
        <div class="basis-full ml-10">
            @include('component.editprofile')
            @include('component.editpassword')
        </div>
        <div class="basis-1/5 ">
            <img src="/imgs/astro-daftar1.png" alt="">
        </div>
    </div>
</body>
@include('component.Footer')
@include('component.script')
</html>