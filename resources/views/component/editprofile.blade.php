<div id="editprofile" class="px-6 h-screen">
    {{-- Form ubah profil --}}
    <h1 class="font-bold text-xl text-white border-b md:mb-5 lg:mb-10">Perbarui Profil</h1>
    <form action="/users/{{ $user->username }}" class="mb-16" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="relative w-full h-fit">
            {{-- bg-profile --}}
            <div class="w-full bg-cover bg-center rounded-lg" style="background-image: url({{ $user->banner }})">
                <div class="absolute top-4 right-4">
                    <button id="dropdownBg-Profile" data-dropdown-toggle="dropdownBgProfile" class="" type="button">
                        <svg class="fill-white w-6 ml-2 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownBgProfile" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow-xl w-44 dark:bg-gray-700">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownBg-Profile">
                            {{-- Header Dropdown --}}
                            <li>
                                <p class="px-2 py-1 text-sm">Pilih latar belakang yang kamu suka</p>
                            </li>
                            {{-- item 1 --}}
                            <li>
                                {{-- apus checkednya, itu buat nandain kalo itu udah dipilih --}}
                                <input {{ $user->banner == '/imgs/bg-profile.png' ? 'checked' : '' }} type="radio" id="bg-choose1" name="banner" value="/imgs/bg-profile.png" class="hidden peer" required>
                                <label for="bg-choose1" class="inline-flex items-center w-full bg-white rounded-lg border-2 border-gray-200 cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                    <div class="block mx-auto p-0.5">
                                        <img class="rounded-md" src="/imgs/bg-profile.png" alt="">
                                    </div>
                                </label>
                            </li>
                            {{-- item 2 --}}
                            <li>
                                <input {{ $user->banner == '/imgs/bg-profile2.png' ? 'checked' : '' }} type="radio" id="bg-choose2" name="banner" value="/imgs/bg-profile2.png" class="hidden peer" required>
                                <label for="bg-choose2" class="inline-flex items-center w-full bg-white rounded-lg border-2 border-gray-200 cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                    <div class="block mx-auto p-0.5">
                                        <img class="rounded-md" src="/imgs/bg-profile2.png" alt="">
                                    </div>
                                </label>
                            </li>
                            {{-- item 3 --}}
                            <li>
                                <input {{ $user->banner == '/imgs/bg-profile3.png' ? 'checked' : '' }} type="radio" id="bg-choose3" name="banner" value="/imgs/bg-profile3.png" class="hidden peer" required>
                                <label for="bg-choose3" class="inline-flex items-center w-full bg-white rounded-lg border-2 border-gray-200 cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                    <div class="block mx-auto p-0.5">
                                        <img class="rounded-md" src="/imgs/bg-profile3.png" alt="">
                                    </div>
                                </label>
                            </li>
                            {{-- item 4 --}}
                            <li>
                                <input {{ $user->banner == '/imgs/bg-profile4.png' ? 'checked' : '' }} type="radio" id="bg-choose4" name="banner" value="/imgs/bg-profile4.png" class="hidden peer" required>
                                <label for="bg-choose4" class="inline-flex items-center w-full bg-white rounded-lg border-2 border-gray-200 cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                    <div class="block mx-auto p-0.5">
                                        <img class="rounded-md" src="/imgs/bg-profile4.png" alt="">
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex p-5 text-white">
                    {{-- avatar profil --}}
                    <div class="flex items-center">
                        {{-- yang ini jangan diapus dulu dap <img class="rounded-full shadow-2xl aspect-square" src="{{ $user->avatar ? asset('storage/'.$user->avatar) : '/imgs/default/avatar.png' }}" width="100" height="100" alt="Profil"> --}}
                        <div class="rounded-full w-28 h-28 bg-cover bg-center" 
                            style="background-image: url({{ $user->avatar ? asset('uploads/'.$user->avatar) : '/imgs/default/avatar.png' }})" width="100" height="100" alt="Profil">
                        </div>
                    </div>
                    <div class="pl-4 my-12">
                        <h3 class="pl-2">Ganti Profil</h3>
                        <label for="" class="block">
                            {{-- input file photo profile --}}
                            <input type="file" 
                            name="avatar"
                            id="" 
                            class="
                                file:bg-blue-500
                                file:px-6 file:py-3
                                file:border-none
                                file:rounded-full
                                file:text-white
                                file:cursor-pointer
                                file:shadow-lg
                                        
                                bg-blue-900
                                text-white/80
                                rounded-full
                                cursor-pointer
                                shadow-lg
                            ">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        {{-- form --}}
        <div class="flex py-6">
            <div class="basis-1/2 mr-5">
                <div class="mb-3">
                    <label for="username" class="block mb-2 text-base font-medium text-white">Username</label>
                    <input type="text" id="username" placeholder="Example" class="bg-thirdclr border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    value="{{ old('username', $user->username) }}" name="username">
                </div>
                <div class="mb-3">
                    <label for="e-mail" class="block mb-2 text-base font-medium text-white">E-mail</label>
                    <input type="text" id="e-mail" placeholder="Example@email.com" class="bg-thirdclr border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    value="{{ old('email', $user->email) }}" name="email">
                </div>
            </div>
            <div class="basis-1/2">
                <div class="mb-3">
                    <label for="bio" class="block mb-3 text-sm font-medium text-white">Bio</label>
                    <textarea id="bio" rows="5" placeholder="Isi bio mu disini" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="bio">{{ old('bio', $user->bio) }}</textarea>
                </div>
            </div>
        </div>
        <div class="flex justify-end p-3 gap-4">
            <button type="button" class="text-orange2 bg-white hover:bg-slate focus:ring-2 focus:outline-none focus:ring-secondaryclr font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Batal
            </button>
            <button data-modal-toggle="editProfile-modal" type="button" class="text-white bg-[#FF9119] hover:bg-orange-600 focus:ring-2 focus:outline-none focus:ring-orange2 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Simpan
            </button>
        </div>
        @include('modal.ValidateEditAccount')
    </form>
</div>