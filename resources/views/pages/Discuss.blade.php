<!DOCTYPE html>
<html lang="en">
  @include('component.head')
<body class="font-poppins">
  <div class="bg-mainclr">
  @include('.component.navbar')
    <div class="flex relative py-12 px-24 bg-thirdclr">    
    <div>
    {{-- ini dropdown bawah balasan --}}  
    <button id="menu-btn1" data-dropdown-toggle="dropdown1" class="absolute right-24 top-12 text-white hover:bg-mainclr font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center" type="button">
        <svg class="w-5" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
    <!-- Dropdown menu bawah balasan -->
    <div id="dropdown1" class=" hidden z-10 rounded divide-y shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(246.667px, 70px, 0px);">
        <ul class="text-sm text-white bg-mainclr rounded-md" aria-labelledby="dropdownDefault">
          <li>
            <form action="/discuss/favorites" method="POST" class="block py-2 px-4 hover:bg-thirdclr hover:rounded-t-md hover:text-secondaryclr">
                <svg class="w-4 absolute fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M48 0H336C362.5 0 384 21.49 384 48V487.7C384 501.1 373.1 512 359.7 512C354.7 512 349.8 510.5 345.7 507.6L192 400L38.28 507.6C34.19 510.5 29.32 512 24.33 512C10.89 512 0 501.1 0 487.7V48C0 21.49 21.49 0 48 0z"/></svg>
                <input type="submit" name="submit" value="Simpan Diskusi" class="ml-6">
            </form>        
          </li>
          {{-- user sudah menekan simpan diskusi --}}
          <li>
            <form action="/discuss/delete" method="POST" class="block py-2 px-4 hover:bg-thirdclr hover:rounded-t-md hover:text-secondaryclr">
                <svg class="w-4 absolute fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M48 0H336C362.5 0 384 21.49 384 48V487.7C384 501.1 373.1 512 359.7 512C354.7 512 349.8 510.5 345.7 507.6L192 400L38.28 507.6C34.19 510.5 29.32 512 24.33 512C10.89 512 0 501.1 0 487.7V48C0 21.49 21.49 0 48 0z"/></svg>
                <input type="submit" name="submit" value="Tersimpan" class="ml-6">
            </form>        
          </li>
          <li>
            <form action="/discuss/editdiscuss/" method="POST" class="block py-2 px-4 hover:bg-thirdclr hover:text-secondaryclr">
                <svg class="w-4 absolute fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"/></svg>
                <input type="submit" name="submit" value="Edit Diskusi" class="ml-6">
            </form>            
          </li>
          <li>
            <form action="/discuss/validasideletediscuss" method="POST" class="block py-2 px-4 hover:bg-thirdclr hover:text-secondaryclr">
                <svg class="w-4 absolute fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"/></svg>  
                <input type="submit" name="submit" value="Hapus Diskusi" class="ml-6">
            </form>            
          </li>
          <li>
            <form action="/discuss/report" method="POST" class="block py-2 px-4 hover:bg-thirdclr hover:rounded-b-md hover:text-secondaryclr">
                <svg class="w-4 absolute fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM232 152C232 138.8 242.8 128 256 128s24 10.75 24 24v128c0 13.25-10.75 24-24 24S232 293.3 232 280V152zM256 400c-17.36 0-31.44-14.08-31.44-31.44c0-17.36 14.07-31.44 31.44-31.44s31.44 14.08 31.44 31.44C287.4 385.9 273.4 400 256 400z"/></svg>
                <input type="submit" name="submit" value="Laporkan Diskusi" class="ml-6">
            </form>
          </li>
        </ul>
    </div>        

    {{-- ini isian --}}
    <h1 class="font-bold text-3xl text-white">{{ $discuss->title }}</h1>
      <div class="border-b mt-2">
      <img                  
        class="w-6 rounded-full absolute" 
        src="{{ $discuss->user->avatar ? asset('uploads/'.$discuss->user->avatar) : '/imgs/default/avatar.png' }}"/>
      <p class="text-sm ml-10 pt-1 text-white mb-3">Di unggah oleh <span><span class="text-secondaryclr">{{ $discuss->user->username }}</span></span> | <span>{{ $discuss->created_at->diffForHumans() }}</span></p>
      </div>
      <article class="mt-3 text-sm text-white">{!! $discuss->body !!}</article>      
      @if ($discuss->picture)
          {{-- ini gambar --}}
        <div class="grid grid-cols-2 max-w-2xl gap-2 ">
          <img
            width="300" class="mt-5 rounded-xl "
            src="{{ asset('uploads/'.$discuss->picture) }}">         
        </div>
      @endif
        <p class="border-b mt-5"></p>
      <div class="flex justify-end">
      
      <a href="#">
        {{-- sebelum user menekan tombol lope --}}
        <svg class="w-6 mt-2 absolute fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg>
        {{-- sesudah user menekan tombol lope --}}
        <svg class="w-6 mt-2 absolute fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg>  
      </a>    
        <span class="text-white ml-8 pr-3 py-2 text-md">{{ count($discuss->likes) }}</span>
      <img 
        class="w-6 h-9 pt-2 mx-1 pointer-events-none" 
        src="/imgs/comment.png" 
        alt=""/>
        <span class="pt-2 ml-1 text-white">{{ count($discuss->comments) }}</span>
      </div>
        <p class="border-b mt-0.5"></p>    

    {{-- ini komentar --}}  
    <div>       
    {{-- ini field komentar --}}
    <div class=" mt-5">
      <form action="/comments/add" method="POST">
        @csrf
          <div>
              <label for="komentar">
                  <input
                  name="body"
                  type="text"
                  id="komentar"
                  placeholder="Tulis Komentar..."
                  class=" py-3 border shadow rounded-lg w-full block bg-transparent text-white border-white focus:outline-none focus:ring-0.5">
              </label>
              <input type="hidden" value="{{ $discuss->id }}" name="discuss_id">
          </div>         
      </form>
    </div>    

    
    </div>
      @foreach ($comments as $comment)
        @php
          $replies = $comments->whereIn('comment_id', $comment->id);
        @endphp
          @if ($replies->first())
            @foreach ($replies as $reply)
              @php
                  $replies2 = $discuss->comments->whereIn('comment_id', $reply->id);
              @endphp
              @if ($replies2->first())
                @include('component.carcommentlv2')
                @include('component.cardcomment')
                  @foreach ($replies2 as $reply2)
                    {{-- lv 2 --}}
                    @include('component.cardcommentlv2')
                  @endforeach
                @else
                  {{-- lv 3 --}}                
                  @include('component.cardcommentlv3')
                @endif
            @endforeach
              @else
                {{-- lv 1 --}}
                @include('component.cardcomment')
              @endif        
      @endforeach
    </div>
    {{-- bentrok --}}
  </div>     
    </div>
  </div>
</body>
@include('component.Footer')
@include('component.Script')
</html>