{{-- ubah password --}}
<div id="editpassword" class="px-6">
    <h1 class="font-bold text-xl text-white border-b">Perbarui Password</h1>
    
    {{-- form --}}
    <form action="/users/{{ $user->username }}" method="POST">
        @method('put')
        @csrf
        <div class="md:mt-5 lg:mt-10 mr-5">
            <div class="mb-3">
                <label for="currentPassword" class="block mb-2 text-base font-medium text-white">Password sebelumnya</label>
                <input type="password" id="currentPassword" name="currentPassword"
                    class="block w-full p-2.5 shadow-lg text-sm rounded-lg @error('currentPassword') ring-red-600 border-red-500 border-2 @enderror">
                {{-- password error, jika password tidak sesuai dengan akun milik pengguna --}}
                <p class="text-sm mt-1 -mb-3 text-red-500">
                    Password tidak sesuai
                </p>
            </div>
            <div class="mb-3">
                <label for="password" class="block mb-2 text-base font-medium text-white">Password baru</label>
                <input type="password" id="password" name="password"
                    class="block w-full p-2.5 shadow-lg text-sm rounded-lg @error('password') ring-red-600 border-red-500 border-2 @enderror">
                {{-- password error, jika password yang baru tidak lebih dari 8 karakter --}}
                <p class="text-sm mt-1 -mb-3 text-red-500">
                    Password harus lebih dari 8 karakter
                </p>
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="block mb-2 text-base font-medium text-white">Konfirmasi Password</label>
                <input type="password" id="confirmPassword" name="confirm_password"
                    class="bg-thirdclr border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
        </div>
        <div class="flex justify-end p-3 gap-4">
            <button type="button" class="text-orange2 bg-white hover:bg-slate focus:ring-2 focus:outline-none focus:ring-secondaryclr font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Batal
            </button>
            <button type="button" data-modal-toggle="editPassword-modal" class="text-white bg-[#FF9119] hover:bg-orange-600 focus:ring-2 focus:outline-none focus:ring-orange2 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-md">
                Simpan
            </button>
        </div>
        @include('modal.ValidateEditPassword')
    </form>
    <div class="flex justify-center">
        <img src="/imgs/astro-pass.png" alt="astro" width="350">
    </div>
</div>