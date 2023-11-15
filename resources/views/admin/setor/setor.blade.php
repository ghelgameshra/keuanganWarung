@extends('dashboard.partials.main')
@section('title')
Monitoring | Setor
@endsection

@section('setoran')
<main class="relative w-full sm:w-[600px] h-screen mx-auto">
  {{-- setor content --}}
  <div class="px-5 py-5 flex flex-col gap-4 overflow-y-auto relative bg-blue-600 h-screen">
    <div class="flex items-center">
      <h1 class="font-bold text-lg text-white mx-auto">DAFTAR SETOR HARIAN</h1>
      <a href="/dashboard/setor/create"
        class="hidden py-1 px-3 sm:flex gap-2 ml-auto bg-green-400 text-white items-center rounded-lg">
        <i class="fa-solid fa-plus"></i>
        Setoran Baru
      </a>
    </div>

    <div class=" flex items-center">
      <div class="bg-white text-dark-secondary px-5 py-2 text-base rounded-l-lg">
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>
      <input type="text" placeholder="Cari Data" class="border-none rounded-r-lg w-full" autocomplete="off">
    </div>


    <div class="flex flex-col gap-3 bg-gray-50 p-4 rounded-lg text-center">
      <h1 class="font-black text-lg text-dark-secondary">RANGKUMAN LAPORAN SHIFT</h1>
      <div class="flex gap-2 text-white justify-center w-full">
        <div class="bg-yellow-500 p-3 rounded-lg shadow-md text-center w-full">
          <h2 class="font-bold">PENDING</h2>
          <h3 class="p-1">{{ $laporanPending }}</h3>
          <p></p>
        </div>

        <div class="bg-red-500 p-3 rounded-lg shadow-md text-center w-full">
          <h2 class="font-bold">DITOLAK</h2>
          <h3 class="p-1">{{ $laporanDitolak }}</h3>
          <p></p>
        </div>

        <div class="bg-blue-500 p-3 rounded-lg shadow-md text-center w-full">
          <h2 class="font-bold">SELESAI</h2>
          <h3 class="p-1">{{ $laporanSelesai }}</h3>
          <p></p>
        </div>
    </div>

  </div>


  @include('admin.setor.setorTable')

  <a href="/dashboard/setor/create"
    class="bg-green-400 text-white rounded-full flex w-11 h-11 fixed left-[80%] sm:hidden bottom-24 shadow-lg items-center justify-center">
    <i class="fa-solid fa-plus"></i>
  </a>
</main>
@endsection
