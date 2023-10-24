@extends('dashboard.partials.main')
@section('title')
  Monitoring | Laporan
@endsection

@section('laporan')
<main class="relative w-full sm:w-[600px] h-screen">
  {{-- laporan content --}}
  <div class="px-10 py-20 flex flex-col gap-4 overflow-y-auto">
    <h1 class="font-bold text-lg">Laporan Saya</h1>

    <a href="/dashboard/laporan" class="bg-white rounded-md flex flex-col items-center py-5 text-white main-bg">
      <i class="fa-solid fa-plus"></i>
      <p class="font-bold">Laporan Baru</p>
    </a>

    {{-- laporan history container --}}
    <div class="flex flex-col gap-3">
      {{-- laporan history --}}
      <div class="flex gap-3 items-center bg-white rounded-md">
        <div class="main-bg px-7 py-5 rounded-xl">
          <p class="font-bold text-white">01</p>
        </div>
        <div>
          <p>Rp. 200.000</p>
        </div>

        <a href="" class="ml-auto text-2xl text-blue-600">
          <i class="fa-regular fa-eye"></i>
        </a>

        <div class="text-2xl mr-3 text-green-600">
          <i class="fa-regular fa-circle-check"></i>
        </div>
      </div>


      <div class="flex gap-3 items-center bg-white rounded-md">
        <div class="main-bg px-7 py-5 rounded-xl">
          <p class="font-bold text-white">30</p>
        </div>
        <div>
          <p>Rp. 213.000</p>
        </div>

        <a href="" class="ml-auto text-2xl text-blue-600">
          <i class="fa-regular fa-eye"></i>
        </a>

        <div class="text-2xl mr-3 text-red-600">
          <i class="fa-regular fa-circle-xmark"></i>
        </div>
      </div>



    </div>
  </div>

  {{-- call footer --}}
  @include('dashboard.partials.footer')
</main>
@endsection
