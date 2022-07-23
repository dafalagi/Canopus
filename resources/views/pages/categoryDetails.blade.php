<!DOCTYPE html>
<html lang="en">
@include('component.head')

<body class="w-full h-full bg-no-repeat bg-cover font-body"
style="background-image: url(/imgs/bg-listBendaLangit.png)">
@include('component.navbar')
<div class="p-10">
    {{-- Section Welcome --}}
    <section id="Welcome" class="mb-16">
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
                        <div class="flex items-center">
                            <svg class="h-8 w-8 absolute ml-3 text-black"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>                          
                            <input 
                            type="text"
                            name="search"
                            placeholder="Benda langit apa yang ingin kamu kunjungi??"
                            autocomplete="off"
                            class="w-full lg:pl-20 py-3 font-semibold rounded-xl border-none ring-2 ring-gray-300 focus:ring-grey-50 focus:ring-2 shadow-lg"
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
                    <h1 class="text-center text-2xl font-bold underline text-white pb-6">Planet</h1>
                </div>
                {{-- card --}}
                <div class="">
                    <div class="grid grid-cols-3 gap-4 px-10 justify-center">
                        @foreach ($contents as $content)
                            {{-- card 1 --}}
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