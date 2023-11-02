@extends('dashboard.partials.main')
@section('title')
  Monitoring | Setor
@endsection

@section('setoran')
<main class="relative w-full sm:w-[600px] h-screen mx-auto">
  {{-- setor content --}}
  <div class="px-10 py-20 flex flex-col gap-4 overflow-y-auto relative">
    <div class="flex items-center">
      <h1 class="font-bold text-lg text-dark-secondary">DAFTAR SETOR HARIAN</h1>
      <a href="/dashboard/setor/create" class="hidden py-1 px-3 sm:flex gap-2 ml-auto bg-green-400 text-white items-center rounded-lg">
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
    @include('admin.setor.setorTable')
  </div>
  <a href="/dashboard/setor/create" class="p-2 bg-green-400 text-white rounded-full flex justify-center w-8 h-8 fixed left-[85%] sm:hidden transform -translate-x-1/2 bottom-24 shadow-lg">
    <i class="fa-solid fa-plus"></i>
  </a>
</main>
@endsection

