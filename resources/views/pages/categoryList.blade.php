<!DOCTYPE html>
<html lang="en">
@include('component.head')

<body class="w-full h-full bg-no-repeat bg-cover font-body"
style="background-image: url(/imgs/bg-listBendaLangit.png)">
@include('component.navbar')
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
                        <div class="flex items-center">
                            <svg class="h-8 w-8 absolute ml-3 text-black"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>                          
                            <input 
                            type="text"
                            name="search"
                            placeholder="Benda langit apa yang ingin kamu kunjungi??"
                            autocomplete="off"
                            class="w-full lg:pl-20 py-3 font-semibold rounded-xl border-none ring-2 ring-gray-300 focus:ring-grey-50 focus:ring-2 shadow-lg">
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

    {{-- Section Tahokah Kamu --}}
    <section id="Tahokah kamu" class="mb-12">
        <div class="container mx-auto bg-mainclr rounded-xl shadow-lg border-x-4 border-secondaryclr">
            <div class="flex flex-row items-center p-10">
                <div class="flex">
                    <div class="relative basis-full">
                        <h1 class="text-2xl font-bold text-white pb-4">Taho kah kamu?</h1>
                        @php
                            $i = mt_rand(0, count($contents)-1);
                        @endphp
                        <p class="text-base font-normal mb-16 text-white text-opacity-80 pr-10">
                            {{ $contents[$i]->trivia }}
                        </p>
                        <a class="absolute bottom-0 left-0 py-2 px-10 rounded-lg text-center text-white bg-orange2 hover:bg-secondaryclr shadow-xl transition duration-200" 
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
                    <a href="">
                        <p class="text-white mx-auto opacity-80">
                            Lihat lainnya
                        </p>
                    </a>
                </div>
            </div>
            {{-- card --}}
            <div class="grid grid-cols-3 gap-4 place-items-stretch px-10">
                @foreach ($contents->where('category', 'Planet')->slice(0,3) as $content)
                    {{-- card 1 --}}
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
                    <a href="">
                        <p class="text-white mx-auto opacity-80">
                            Lihat lainnya
                        </p>
                    </a>
                </div>
            </div>
            {{-- card --}}
            <div class="grid grid-cols-3 gap-4 place-items-stretch px-10">
                @foreach ($contents->where('category', 'Bintang')->slice(0,3) as $content)
                    {{-- card 1 --}}
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
                    <a href="">
                        <p class="text-white mx-auto opacity-80">
                            Lihat lainnya
                        </p>
                    </a>
                </div>
            </div>
            {{-- card --}}
            <div class="grid grid-cols-3 gap-4 place-items-stretch px-10">
                @foreach ($contents->where('category', 'Rasi Bintang')->slice(0,3) as $content)
                    {{-- card 1 --}}
                    @include('component.cardPlanet')
                @endforeach
            </div>
        </div>
    </section>

    {{-- Section Benda Langit Lainnya--}}
    @php
        $category = $contents->where('category', 'Lainnya di Angkasa');
    @endphp
    <section id="BendaLangitLainnya" class="mb-12">
        <div class="container w-full mx-auto">
            <h1 class="w-full text-2xl font-bold underline text-white pb-8">Lainnya di Angkasa</h1>
            <div class="grid grid-rows-2 grid-flow-col gap-4 w-full">
                {{-- card comet --}}
                <div class="row-span-2 col-span-2 rounded-xl bg-white p-1">
                    <a href="#">
                        <div class="container relative rounded-xl hover:scale-110 transition duration-300 ease-in-out">
                            <img src="/imgs/comet.png" alt="Comet" class="object-none max-w-full mx-auto rounded-xl">
                            <div class="absolute p-5 bottom-0 left-0">
                                <p class="text-white text-lg">komet</p>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- card Meteor --}}
                <div class="rounded-xl bg-white p-1">
                    <a href="#">
                        <div class="container relative rounded-xl hover:scale-110 transition duration-300 ease-in-out">
                            <img src="/imgs/meteor.png" alt="Meteor" class="object-none max-w-full mx-auto rounded-xl">
                            <div class="absolute p-5 bottom-0 left-0">
                                <p class="text-white text-lg">Meteor</p>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- card Asteroid --}}
                <div class="rounded-xl bg-white p-1">
                    <a href="#">
                        <div class="container relative rounded-xl hover:scale-110 transition duration-300 ease-in-out">
                            <img src="/imgs/asteroid.png" alt="Asteroid" class="object-none max-w-full mx-auto rounded-xl">
                            <div class="absolute p-5 bottom-0 left-0">
                                <p class="text-white text-lg">Asteroid</p>
                            </div>
                        </div>
                    </a>
                </div>
              </div>
        </div>
    </section>

</div>
</body>
@include('component.Footer')
</html>