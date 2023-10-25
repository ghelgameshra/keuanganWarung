@extends('dashboard.partials.main')
@section('title')
  Laporan | {{ $laporan->id_laporan }}
@endsection

@section('laporan')
<main class="relative w-full sm:w-[600px] h-screen mx-auto">
  {{-- laporan content --}}
  <div class="px-10 py-20 flex flex-col gap-4 overflow-y-auto">
    <h1 class="font-bold text-lg">Laporan Saya</h1>

    <a href="/dashboard/laporan/create" class="bg-white rounded-md flex flex-col items-center py-5 text-white main-bg">
      <i class="fa-solid fa-plus"></i>
      <p class="font-bold">Laporan Baru</p>
    </a>

    {{-- laporan history container --}}
    <div class="flex flex-col gap-3">
      {{-- laporan detail --}}
      <div class="flex flex-col gap-4 bg-white rounded-md px-4 py-5">
        <div class="mx-auto text-center py-5 flex flex-col gap-3">
          @if ($laporan->approved === 'Y')
          <i class="text-3xl fa-regular fa-circle-check text-green-500"></i>
          <p class="font-xs text-green-500">Diterima</p>
          @elseif($laporan->approved === 'N')
          <i class="text-3xl fa-regular fa-circle-xmark text-red-500"></i>
          <p class="font-xs text-red-500">Ditolak</p>
          @else
          <i class="text-3xl fa-solid fa-spinner text-yellow-500"></i>
          <p class="font-xs text-yellow-500">Dalam Pengecekan</p>
          @endif
        </div>

        <div>
          @include('dashboard.laporan.tabel')
        </div>

      </div>




    </div>
  </div>
</main>
@endsection
