<div class="mx-auto">
      <h1 class="text-2xl font-bold underline text-center p-10">Hal unik yang pernah terjadi di {{ $content->title }}</h1>  
      <div class="grid grid-cols-3 gap-4 place-items-stretch px-5">
          @foreach ($events as $event)
            <div class="relative aspect-video rounded-xl">
              <div class="hover:scale-105 transition duration-300 ease-in-out">
                <a href="/contents/details/{{ $event->slug }}">
                  <div class="bg-cover bg-center aspect-video rounded-xl"
                  @if ($event->mainpicture)
                    style ="background-image: url({{ asset('uploads/'.$event->mainpicture) }})" alt="{{ $event->title }}" class="object-cover rounded-xl"
                  @else
                    style="background-image: url(https://source.unsplash.com/640x480?space)" alt="Default Image" class="object-cover rounded-xl"
                  @endif>
                  <div class="absolute p-5 bottom-3 left-3 text-lg">
                    <p class="text-white font-bold">{{ $event->title }}</p>
                  </div>
                  </div>
                </a>
              </div>
            </div>
          @endforeach
      </div>
    </div> 