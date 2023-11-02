<footer
  class="w-full sm:w-[600px] sm:left-1/2 sm:transform sm:-translate-x-1/2 rounded rounded-t-xl fixed left-0 bottom-0 bg-white px-10 py-4">
  <div class="relative flex justify-between">
    <div>
      <a href="/dashboard/laporan" class="flex flex-col items-center gap-1 text-dark-secondary">
        <i class="fa-regular fa-chart-bar"></i>
        <p class="text-xs">Laporan</p>
      </a>
    </div>


  @if ( auth()->user()->level == 1 )
  <div>
    <a href="/dashboard/setor" class="flex flex-col items-center gap-1 text-dark-secondary mr-5">
      <i class="fa-regular fa-calendar"></i>
      <p class="text-xs">Harian</p>
    </a>
  </div>
  @endif

    {{-- <div class="absolute left-1/2 transform -translate-x-1/2 -top-12"> --}}
    <div class="-mt-10 absolute left-1/2 transform -translate-x-1/2">
      <a href="/"
        class="flex flex-col justify-center items-center gap-1 text-white main-bg rounded-full shadow-md w-16 h-16">
        <i class="fa-solid fa-house"></i>
        <p class="text-xs">Home</p>
      </a>
    </div>


    @if ( auth()->user()->level == 1 )
    <div>
      <a href="/dashboard/rangkuman" class="flex flex-col items-center gap-1 text-dark-secondary ml-5">
        <i class="fa-regular fa-file-lines"></i>
        <p class="text-xs">Rangkuman</p>
      </a>
    </div>
    @endif

    <div>
      <a href="/dashboard/profile" class="flex flex-col items-center gap-1 text-dark-secondary">
        <i class="fa-regular fa-user"></i>
        <p class="text-xs">Profil</p>
      </a>
    </div>
  </div>


</footer>
