<!DOCTYPE html>
<html lang="en">
  @include('component.head')
  <body class="font-poppins">
  <div class="h-screen relative w-full pt-1 bg-no-repeat bg-left-top"
    @if($content->mainpicture)
      style="background-image: url({{ asset('uploads/'.$content->mainpicture) }})"
    @else
      style="background-image: url(https://source.unsplash.com/1920x1080?space)"
    @endif
    >
    @include('component.navbar')
    @if (session()->has('success'))
      <div class="absolute w-full mt-24">
        @include('component.AlertSuccess')
      </div>
    @endif
      <div class="flex items-center text-left my-80 ml-10">
        <div class="text-4xl font-bold text-white" name="nama_planet">{{ $content->title }}</div>
        @php
            if(auth()->user())
            {
              $favorites = auth()->user()->favorites;
              $favorite = $favorites->whereIn('content_id', $content->id);
            }
        @endphp
        @if (auth()->user() && $favorite->isNotEmpty() && $favorite->first()->content_id == $content->id)
          <form action="/favorites/delete/{{ $favorite->first()->id }}" method="post">
              @csrf
              <button class="absolute p-5 bottom-3 right-3 fill-secondaryclr">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                      <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
                  </svg>
              </button>
          </form>
        @else
          <form action="/favorites/content/{{ $content->slug }}" method="post">
              @csrf
              <button class="absolute p-5 bottom-3 right-3 fill-white">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                      <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
                  </svg>
              </button>
          </form>
        @endif
      </div>
  </div>
  <div class="bg-mainclr bottom-0 text-md p-10">
      <div class="flex justify-center font-bold text-xl">
        <div class="flex-col text-center mx-20">
          <div class="text-orange2">Jarak Dari Bumi</div>
          <div class="text-grey" name="jrk_matahari">{{ $content->distance }}</div>
        </div>
        <div class="flex-col text-center mx-20">
          <div class="text-orange2">Koordinat</div>
          <div class="text-grey" name="koordinat">{{ $content->coordinate }}</div>
        </div>
      </div>
  </div>
  <div class="h-max w-full p-10" style="background-image: url(/imgs/bg-konten.png)">
    <div class="container rounded-lg w-full mx-auto bg-mainclr p-10 text-white">
      <h1 class="text-3xl font-bold underline ml-12">{{ $content->title }}</h1>
      <div class="flex text-white mt-10 ml-12">
        <div class="basis-full">
        <div class="flex-col text-justify">
          <div class="text-2xl font-bold">Apa itu {{ $content->title }} ?</div>
          <div class="mt-3 text-md" name="desc">{!! $content->intro !!}
          </div>
            <div class="text-2xl font-bold pt-5">Sejarah {{ $content->title }}</div>
              <div class="mt-3 text-md" name="desc">{!! $content->history !!}
              </div>
        </div>
        </div>
        <div class="basis-2/4">
          <div class="flex-col text-center mx-20">
            <div class="pt-5">
              <img class="w-auto" src="/imgs/Astro.png" alt="">
            </div>
          </div>
        </div>
      </div>
      @if ($content->pictures != null)
        <h1 class="text-2xl py-5 font-bold underline text-center">Foto</h1>
        @include('component.carouselfoto')
      @endif
      @if($events->first() != null)
        @include('component.cardbendalgt')
      @endif
    </div>
    <div class="container rounded-lg w-full mx-auto bg-mainclr p-10 mt-10 text-white">
      @if ($content->category == 'Lainnya di Angkasa')
        <h1 class="text-3xl font-bold underline text-center">Lainnya di Angkasa</h1>
      @else
        <h1 class="text-3xl font-bold underline text-center">{{ $content->category }} Lainnya</h1>
      @endif
      <div class="grid grid-cols-3 gap-4 place-items-stretch px-10 mt-10">
        @foreach ($others->except($content->id)->take(6) as $content)
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
  @include('component.Footer')
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
  </body>
</html>