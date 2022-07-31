@if (count($content->pictures) == 1)
  <!Grid Satu Foto>
  <div class="container mx-auto">
    <div class="flex justify-center">
      <div class="bg-cover bg-center w-1/2 h-96 ml-3 rounded-xl hover:scale-105 duration-200 ease-in-out"
          style="background-image: url({{ asset('uploads/'.$content->pictures[0])}})">
      </div>
    </div>
  </div>
@else
  <!Grid Banyak Foto>
  <div class="container mx-auto">
      <div class="flex justify-center">
        @foreach ($content->pictures as $picture)
          <div class="bg-cover bg-center w-96 ml-3 aspect-square rounded-xl hover:scale-105 duration-200 ease-in-out"
            style="background-image: url({{ asset('uploads/'.$picture) }})">
          </div>
        @endforeach
      </div>
  </div>
@endif