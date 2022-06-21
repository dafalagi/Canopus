{{-- ubah password --}}
<div class="px-6">
    <h1 class="font-bold text-xl text-white border-b">Ubah Password</h1>
    {{-- form --}}
    <form action="">
        <div class="mt-10 mr-5">
            <div class="mb-3">
                <label for="username" class="block mb-2 text-base font-medium text-white">Password sebelumnya</label>
                <input type="password" id="username" class="bg-thirdclr border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-3">
                <label for="e-mail" class="block mb-2 text-base font-medium text-white">Password baru</label>
                <input type="password" id="e-mail" class="bg-thirdclr border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-3">
                <label for="e-mail" class="block mb-2 text-base font-medium text-white">Konfirmasi Password</label>
                <input type="password" id="e-mail" class="bg-thirdclr border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
        </div>
        <div class="flex justify-end p-3 gap-4">
            <button type="button" class="text-orange2 bg-white hover:bg-slate focus:ring-2 focus:outline-none focus:ring-secondaryclr font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Batal
            </button>
            <button type="button" class="text-white bg-[#FF9119] hover:bg-opacity-80 focus:ring-2 focus:outline-none focus:ring-orange2 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-md">
                Simpan
            </button>
        </div>
    </form>
    <div class="flex justify-center">
        <img src="/imgs/astro-pass.png" alt="astro" width="350">
    </div>
</div>