@if (count($content->pictures) == 1)
  <!Grid Satu Foto>
  <div class="flex flex-wrap justify-center">
    <div class="w-6/12 sm:w-4/12 px-4 rounded-xl">
        <div class="hover:scale-110 transition duration-300 ease-in-out">
          <img src="{{ asset('storage/'.$content->pictures[0]) }}" alt="Picture" class="shadow rounded-xl max-w-full h-auto align-middle border-none" />
        </div>
    </div>
  </div>
@else
  <!Grid Banyak Foto>
  <div class="container px-6 lg:pt-5 lg:px-32">
      <div class="flex flex-wrap -m-1 md:-m-2">
        @foreach ($content->pictures as $picture)
          <div class="flex flex-wrap w-1/3">
            <div class="hover:scale-110 transition duration-300 ease-in-out">
              <div class="w-full p-1 md:p-2">
                <a href="">
                  <img src="{{ asset('storage/'.$picture) }}" alt="Picture" class="shadow rounded-xl max-w-full h-auto align-middle border-none" />
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
  </div>
@endif