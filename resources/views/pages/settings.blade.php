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
                    <a href="#editprofile">
                        <div class="hover:bg-secondaryclr active:bg-secondaryclr items-center text-center p-2 text-base rounded-lg">
                            <p>Profil</p>
                        </div>
                    </a>
                    <a href="#editpassword" target="_parent">
                        <div class="hover:bg-secondaryclr active:bg-secondaryclr items-center text-center p-2 text-base rounded-lg">
                            <p>Password</p>
                        </div>
                    </a>
                </div>
                <div class="py-4 px-3">
                    <button type="button" class="w-full border border-red-500 text-red-500 hover:text-white hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2" data-modal-toggle="deleteAccount-modal">
                        Hapus akun
                    </button>
                    @include('modal.ValidateDeleteAccount')
                </div>
            </aside>
            <div class="mt-10">
                <img src="/imgs/astro1.png" alt="">
            </div>
        </div>
        {{-- Main content --}}
        <div class="basis-full ml-10">
            @if (session()->has('success'))
                {{-- Alert jika perbarui berhasil --}}
                @include('component.AlertSuccess')
            @endif

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