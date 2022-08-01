<!DOCTYPE html>
<html lang="en">
    @include('component.head')

    <body class="w-full h-full bg-no-repeat bg-cover font-poppins"
    style="background-image: url(/imgs/bg-konten.png)">
    @include('component.navbar')
    <div class="p-10">
        {{-- Section Welcome --}}
    <section id="Welcome" class="">
        <div class="container w-full mx-auto">
            <div class="flex flex-row p-8">
                <div class="basis-1/3">
                </div>
                <div class="basis-full w-full py-5">
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-white">Kumpulan Halaman Favoritmu!</h1>
                    </div>                    
                </div>
                <div class="basis-1/3">
                    <div class="w-full self-end">
                        <img src="/imgs/astro-daftar1.png" alt="astro" class="max-w-full mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Planet--}}
    <section id="Planet" class="pb-12">
        <div class="container w-full mx-auto">
            {{-- subheader --}}
            <div class="">                
                <div>
                    <h1 class="text-center text-2xl font-bold underline text-white pb-6">Benda Langit Favoritmu</h1>
                </div> 
                <div class="grid grid-cols-3 gap-6 place-item-stretch px-10">                        
                    {{-- card 1 --}}
                    @foreach ($favorites as $favorite)
                        @if ($favorite->content)
                            @php
                                $content = $favorite->content;
                            @endphp
                            @include('component.cardPlanet')
                        @endif
                    @endforeach                                                                                                            
                </div>
            </div>            
        </div>
    </section>

    {{-- Section Diskusi--}}
    <section id="Discuss" class="pb-12">
        <div class="container w-full mx-auto">
            {{-- subheader --}}
            <div class="">
                <div>
                    <h1 class="text-center text-2xl font-bold underline text-white pb-6">Diskusi Favoritmu</h1>
                </div> 
                {{-- card --}}
                <div class=" justify-center">
                    {{-- @include('component.carddiscuss') --}}
                    @foreach ($favorites as $favorite)
                        @if ($favorite->discuss)
                            @php    
                                $discuss = $discusses->whereIn('id', $favorite->discuss_id)->first();
                                $likes = $discuss->likes->whereIn('discuss_id', $discuss->id);
                    
                                if(auth()->user())
                                {
                                    $like = $likes->whereIn('user_id', auth()->user()->id)->first();
                                }
                            @endphp
                            @include('component.bodyForum')
                        @endif
                    @endforeach
                </div>
            </div>            
        </div>
    </section>

    </div>
    </body>
@include('component.Footer')
</html>
