<!DOCTYPE html>
<html lang="en">
@include('component.head')

<body class="font-poppins">
<div class="w-full h-full bg-no-repeat bg-cover"
    style="background-image: url(/imgs/bg-konten.png)">
@include('component.navbar')
    @if (session()->has('success'))
        {{-- Alert berhasil menambha favorit --}}
        <div class="mt-5 -mb-5">
            @include('component.AlertSuccess')
        </div>
    @endif
    {{-- Main content --}}
    <div class="p-10">
        {{-- Section Welcome --}}
        <section id="Welcome" class="mb-12">
            <div class="container w-full mx-auto">
                <div class="flex flex-row p-8">
                    <div class="basis-1/3">
                    </div>
                    <div class="basis-full w-full py-5">
                        <div class="text-center pb-10">
                            <h1 class="text-3xl font-bold text-white">Selamat datang di samudra angkasa, Astroners!</h1>
                        </div>
                        {{-- Search --}}
                        <form action="">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                                </div>
                                <input 
                                    type="text" 
                                    id="default-search" 
                                    class="block p-4 pl-10 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Benda langit apa yang ingin kamu kunjungi?" 
                                    name="search"
                                    value="{{ request('search') }}">
                            </div> 
                        </form>
                    </div>
                    <div class="basis-1/3">
                        <div class="w-full self-end">
                            <img src="/imgs/astro-daftar1.png" alt="astro" class="max-w-full mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @php
        if(auth()->user())
        {
            $favorites = auth()->user()->favorites;
        }
    @endphp

    @if (!$contents->first())
        <div class="my-5">
            @include('component.AlertNotFound')
        </div>
    @else
        {{-- Section List--}}
        <section id="ViewMore" class="pb-12">
            <div class="container w-full mx-auto">
                {{-- subheader --}}
                <div class="">
                    <h1 class="text-center text-2xl font-bold underline text-white pb-6">{{ $contents->first()->category }}</h1>
                </div>
                {{-- card --}}
                <div class="">
                    <div class="grid grid-cols-3 gap-4 px-10 justify-center">
                        @foreach ($contents as $content)
                            @php
                                if(isset($favorites))
                                {
                                    $favorite = $favorites->whereIn('content_id', $content->id);
                                }
                            @endphp
                            @include('component.cardPlanet') 
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
</body>
@include('component.Footer')
</html>