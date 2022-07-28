<div class="relative aspect-video bg-white p-1 rounded-xl">
    <div class="hover:scale-110 transition duration-300 ease-in-out">
        <a href="/contents/details/{{ $content->slug }}">
            {{-- @if ($content->mainpicture)
                <img src="{{ asset('storage/'.$content->mainpicture) }}" alt="{{ $content->title }}" class="object-cover aspect-video rounded-xl">
            @else
                <img src="https://source.unsplash.com/640x480?space" alt="Default Image" class="object-cover aspect-video rounded-xl">
            @endif --}}
            <div class="bg-cover bg-center aspect-video rounded-xl"
            @if($content->mainpicture)
                style="background-image: url({{ asset('storage/'.$content->mainpicture) }})"
            @else
                style="background-image: url(https://source.unsplash.com/1920x1080?space)"
            @endif>
                <div class="absolute p-5 top-0 left-0 text-slate text-opacity-70 text-sm">
                    <p>Jarak :</p>
                    <p>{{ $content->distance }}</p>
                </div>
                <div class="absolute w-4/5 p-5 bottom-3 left-3 text-lg">
                    <p class="text-white">{{ $content->title }}</p>
                </div>
            </div>
        </a>
        @if (Request::is('favorites*'))
            @if (isset($favorite) && $favorite->content_id == $content->id)
            <form action="/favorites/delete/{{ $favorite->id }}" method="post">
                @csrf
                <button class="absolute p-5 bottom-3 right-3 fill-secondaryclr">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                        <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
                    </svg>
                </button>
                @include('component.AlertSuccess')
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
        @else
            @if (isset($favorite) && $favorite->isNotEmpty() && $favorite->first()->content_id == $content->id)
            <form action="/favorites/delete/{{ $favorite->first()->id }}" method="post">
                @csrf
                <button class="absolute p-5 bottom-3 right-3 fill-secondaryclr">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                        <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
                    </svg>
                </button>
                @include('component.AlertSuccess')
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
        @endif
    </div>
</div>