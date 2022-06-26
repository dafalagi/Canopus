<div class="mx-auto">
      <h1 class="text-3xl font-bold underline text-center p-10">Hal unik yang pernah terjadi di {{ $content->title }}</h1>  
      <div class="grid grid-cols-3 gap-4 place-items-stretch px-10">
          @foreach ($events as $event)
            <div class="relative aspect-video rounded-xl">
              <div class="hover:scale-110 transition duration-300 ease-in-out">
                <a href="/contents/details/{{ $event->slug }}">
                  @if ($event->mainpicture)
                    <img src="{{ asset('storage/'.$event->mainpicture) }}" alt="{{ $event->title }}" class="object-cover rounded-xl">
                  @else
                    <img src="https://source.unsplash.com/640x480?space" alt="Default Image" class="object-cover rounded-xl">
                  @endif
                <div class="absolute p-5 bottom-3 left-3 text-lg">
                    <p class="text-white font-bold">{{ $event->title }}</p>
                </div>
                </a>
              </div>
            </div>
          @endforeach
      </div>
    </div> 