{{-- ubah password --}}
<div id="editpassword" class="px-6">
    <h1 class="font-bold text-xl text-white border-b">Ubah Password</h1>
    @if ($errors->hasAny('username', 'email', 'currentPassword', 'password', 'confirm_password', 'avatar', 'bio', 'is_admin'))
    <h1 class="font-bold text-xl text-white border-b">{{ $errors->first() }}</h1>
    @endif
    {{-- form --}}
    <form action="/users/{{ $user->username }}" method="POST">
        @method('put')
        @csrf
        <div class="mt-10 mr-5">
            <div class="mb-3">
                <label for="currentPassword" class="block mb-2 text-base font-medium text-white">Password sebelumnya</label>
                <input type="password" id="currentPassword" class="bg-thirdclr border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                name="currentPassword">
            </div>
            <div class="mb-3">
                <label for="password" class="block mb-2 text-base font-medium text-white">Password baru</label>
                <input type="password" id="password" class="bg-thirdclr border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                name="password">
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="block mb-2 text-base font-medium text-white">Konfirmasi Password</label>
                <input type="password" id="confirmPassword" class="bg-thirdclr border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                name="confirm_password">
            </div>
        </div>
        <div class="flex justify-end p-3 gap-4">
            <button type="button" class="text-orange2 bg-white hover:bg-slate focus:ring-2 focus:outline-none focus:ring-secondaryclr font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Batal
            </button>
            <button type="submit" class="text-white bg-[#FF9119] hover:bg-orange-600 focus:ring-2 focus:outline-none focus:ring-orange2 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-md">
                Simpan
            </button>
        </div>
    </form>
    <div class="flex justify-center">
        <img src="/imgs/astro-pass.png" alt="astro" width="350">
    </div>
</div>