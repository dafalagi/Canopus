<!DOCTYPE html>
<html lang="en">
@include('component.head')

<body class="font-poppins">
<div class="w-full h-full bg-no-repeat bg-cover" style="background-image: url(/imgs/bg-konten.png)">
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
                        <form action="/contents">
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
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
            $count = count($contents)-1;

            if($count < 0)
            {
                $count = 0;
            }

            $i = mt_rand(0, $count);
            
            if(auth()->user())
            {
                $favorites = auth()->user()->favorites;
            }
        @endphp

        @if($contents->first() && request('search') != null)
        {{-- Section Search--}}
        <section id="Planet" class="mb-12">
            <div class="container w-full mx-auto">
                {{-- card --}}
                <div class="grid grid-cols-3 gap-4 place-items-stretch px-10">
                    @foreach ($contents as $content)
                        @include('component.cardPlanet')
                    @endforeach
                </div>
            </div>
        </section>
        @elseif(!$contents->first())
        <div class="my-5">
            @include('component.AlertNotFound')
        </div>
        @else
        {{-- Section Tahokah Kamu --}}
        <section id="Tahokah kamu" class="mb-12">
            <div class="container mx-auto bg-mainclr rounded-xl shadow-lg border-x-4 border-secondaryclr">
                <div class="flex flex-row items-center p-10">
                    <div class="flex">
                        <div class="relative basis-full">
                            <h1 class="text-2xl font-bold text-white pb-4">Taho kah kamu?</h1>
                            <p class="text-base font-normal mb-16 text-white text-opacity-80 pr-10">
                                {{ $contents[$i]->trivia }}
                            </p>
                            <a class="absolute bottom-0 left-0 py-2 px-10 rounded-lg text-center text-white bg-orange2 hover:bg-orange-500 shadow-xl transition duration-50" 
                            href="/contents/details/{{ $contents[$i]->slug }}" role="button">
                                Lihat
                            </a>
                        </div>
                        <div class="basis-60">
                            <div class="mx-auto">
                                @if ($contents[$i]->mainpicture)
                                    <img src="{{ asset('storage/'.$contents[$i]->mainpicture) }}" alt="{{ $contents[$i]->title }}"
                                    width="240" class="rounded-full">
                                @else
                                    <img src="https://source.unsplash.com/600x600?space" width="240" alt="Default Picture" class="rounded-full">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        {{-- Section Planet--}}
        <section id="Planet" class="mb-12">
            <div class="container w-full mx-auto">
                {{-- subheader --}}
                <div class="flex justify-between">
                    <div>
                        <h1 class="text-2xl font-bold underline text-white pb-4">Planet</h1>
                    </div>
                    <div>
                        <a href="/contents/planet">
                            <p class="text-white mx-auto opacity-50 hover:opacity-80">
                                Lihat lainnya
                            </p>
                        </a>
                    </div>
                </div>
                {{-- card --}}
                <div class="grid grid-cols-3 gap-4 place-items-stretch px-10">
                    @foreach ($contents->where('category', 'Planet')->take(3) as $content)
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
        </section>

        {{-- Section Planet kerdil--}}
        <section id="PlanetKerdil" class="mb-12">
            <div class="container w-full mx-auto">
                {{-- subheader --}}
                <div class="flex justify-between">
                    <div>
                        <h1 class="text-2xl font-bold underline text-white pb-4">Bintang</h1>
                    </div>
                    <div>
                        <a href="/contents/bintang">
                            <p class="text-white mx-auto opacity-50 hover:opacity-80">
                                Lihat lainnya
                            </p>
                        </a>
                    </div>
                </div>
                {{-- card --}}
                <div class="grid grid-cols-3 gap-4 place-items-stretch px-10">
                    @foreach ($contents->where('category', 'Bintang')->take(3) as $content)
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
        </section>

        {{-- Section Bintang--}}
        <section id="Bintang" class="mb-12">
            <div class="container w-full mx-auto">
                {{-- subheader --}}
                <div class="flex justify-between">
                    <div>
                        <h1 class="text-2xl font-bold underline text-white pb-4">Rasi Bintang</h1>
                    </div>
                    <div>
                        <a href="/contents/rasi%20bintang">
                            <p class="text-white mx-auto opacity-50 hover:opacity-80">
                                Lihat lainnya
                            </p>
                        </a>
                    </div>
                </div>
                {{-- card --}}
                <div class="grid grid-cols-3 gap-4 place-items-stretch px-10">
                    @foreach ($contents->where('category', 'Rasi Bintang')->take(3) as $content)
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
        </section>

        {{-- Section Benda Langit Lainnya --}}
        <section id="BendaLangitLainnya" class="mb-12">
            <div class="container w-full mx-auto">
                <div class="flex justify-between">
                    <div>
                        <h1 class="text-2xl font-bold underline text-white pb-4">Lainnya Di Angkasa</h1>
                    </div>
                    <div>
                        <a href="/contents/lainnya%20di%20angkasa">
                            <p class="text-white mx-auto opacity-50 hover:opacity-80">
                                Lihat lainnya
                            </p>
                        </a>
                    </div>
                </div>
                <div class="grid grid-rows-2 grid-flow-col gap-4 w-full">
                    @php
                        $content1 = $contents->where('category', 'Lainnya di Angkasa')->random();
                        $content2 = $contents->where('category', 'Lainnya di Angkasa')->except($content1->id)->random();
                        $content3 = $contents->where('category', 'Lainnya di Angkasa')->except([$content1->id, $content2->id])->random();
                    @endphp
                    {{-- card 1 --}}
                    <div class="row-span-2 col-span-2 w-full h-full rounded-xl bg-white p-1">
                        <a href="/contents/details/{{ $content1->slug }}">
                            <div class="container relative rounded-xl hover:scale-110 transition duration-300 ease-in-out">
                                @if ($content1->mainpicture)
                                    <img src="{{ asset('storage/'.$content1->mainpicture) }}" 
                                    alt="{{ $content1->title }}" class="object-none max-w-full mx-auto rounded-xl" width="1000" height="600">
                                @else
                                    <img src="https://source.unsplash.com/1000x650?space" 
                                    alt="Default Image" class="object-none max-w-full mx-auto rounded-xl" width="1000" height="600">
                                @endif
                                <div class="absolute p-5 bottom-0 left-0">
                                    <p class="text-white text-lg">{{ $content1->title }}</p>
                                </div>
                                @php
                                    if(isset($favorites))
                                    {
                                        $favorite = $favorites->whereIn('content_id', $content1->id);
                                    }
                                @endphp
                                @if (auth()->user() && $favorite->isNotEmpty() && $favorite->first()->content_id == $content1->id)
                                    <form action="/favorites/delete/{{ $favorite->first()->id }}" method="post">
                                        @csrf
                                        <button class="absolute p-5 bottom-3 right-3 fill-secondaryclr">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                                                <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
                                            </svg>
                                        </button>
                                    </form>
                                @else
                                    <form action="/favorites/content/{{ $content1->slug }}" method="post">
                                        @csrf
                                        <button class="absolute p-5 bottom-3 right-3 fill-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                                                <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
                                            </svg>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </a>
                    </div>
                    {{-- card 2 --}}
                    <div class="rounded-xl bg-white p-1">
                        <a href="/contents/details/{{ $content2->slug }}">
                            <div class="container relative rounded-xl hover:scale-110 transition duration-300 ease-in-out">
                                @if ($content2->mainpicture)
                                    <img src="{{ asset('storage/'.$content2->mainpicture) }}" 
                                    alt="{{ $content2->title }}" class="object-none max-w-full mx-auto rounded-xl" width="500" height="315">
                                @else
                                    <img src="https://source.unsplash.com/500x315?space" 
                                    alt="Default Image" class="object-none max-w-full mx-auto rounded-xl" width="500" height="315">
                                @endif
                                <div class="absolute p-5 bottom-0 left-0">
                                    <p class="text-white text-lg">{{ $content2->title }}</p>
                                </div>
                                @php
                                    if(isset($favorites))
                                    {
                                        $favorite = $favorites->whereIn('content_id', $content2->id);
                                    }
                                @endphp
                                @if (auth()->user() && $favorite->isNotEmpty() && $favorite->first()->content_id == $content2->id)
                                    <form action="/favorites/delete/{{ $favorite->first()->id }}" method="post">
                                        @csrf
                                        <button class="absolute p-5 bottom-3 right-3 fill-secondaryclr">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                                                <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
                                            </svg>
                                        </button>
                                    </form>
                                @else
                                    <form action="/favorites/content/{{ $content2->slug }}" method="post">
                                        @csrf
                                        <button class="absolute p-5 bottom-3 right-3 fill-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                                                <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
                                            </svg>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </a>
                    </div>
                    {{-- card 3 --}}
                    <div class="rounded-xl bg-white p-1">
                        <a href="/contents/details/{{ $content3->slug }}">
                            <div class="container relative rounded-xl hover:scale-110 transition duration-300 ease-in-out">
                                @if ($content3->mainpicture)
                                    <img src="{{ asset('storage/'.$content3->mainpicture) }}" 
                                    alt="{{ $content3->title }}" class="object-none max-w-full mx-auto rounded-xl" width="500" height="315">
                                @else
                                    <img src="https://source.unsplash.com/500x315?space" 
                                    alt="Default Image" class="object-none max-w-full mx-auto rounded-xl" width="500" height="315">
                                @endif
                                <div class="absolute p-5 bottom-0 left-0">
                                    <p class="text-white text-lg">{{ $content3->title }}</p>
                                </div>
                                @php
                                    if(isset($favorites))
                                    {
                                        $favorite = $favorites->whereIn('content_id', $content3->id);
                                    }
                                @endphp
                                @if (auth()->user() && $favorite->isNotEmpty() && $favorite->first()->content_id == $content3->id)
                                    <form action="/favorites/delete/{{ $favorite->first()->id }}" method="post">
                                        @csrf
                                        <button class="absolute p-5 bottom-3 right-3 fill-secondaryclr">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                                                <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
                                            </svg>
                                        </button>
                                    </form>
                                @else
                                    <form action="/favorites/content/{{ $content3->slug }}" method="post">
                                        @csrf
                                        <button class="absolute p-5 bottom-3 right-3 fill-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                                                <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
                                            </svg>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        @endif
    </div>
</div>
</body>
@include('component.Footer')
</html>