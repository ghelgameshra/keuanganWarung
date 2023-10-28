@extends('dashboard.partials.main')
@section('title')
  Laporan | {{ $laporan->id_laporan }}
@endsection

@section('laporan')
<main class="relative w-full sm:w-[600px] h-screen mx-auto">
  {{-- laporan content --}}
  <div class="px-10 py-20 flex flex-col gap-4 overflow-y-auto">
    <h1 class="font-bold text-lg text-center py-4 text-dark-secondary">DETAIL LAPORAN {{ $laporan->id_laporan }}</h1>

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
          <i class="text-3xl fa-solid fa-spinner text-yellow-500 animate-spin"></i>
          <p class="font-xs text-yellow-500">Dalam Pengecekan</p>
          @endif
        </div>

        <div>
          @include('admin.laporan.tabelDetail')
        </div>

      </div>




    </div>
  </div>
</main>
@endsection
