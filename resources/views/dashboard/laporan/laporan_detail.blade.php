@extends('dashboard.partials.main')
@section('title')
  Laporan | {{ $laporan->id_laporan }}
@endsection

@section('laporan')
<main class="relative w-full sm:w-[600px] h-screen mx-auto bg-slate-50">
  {{-- laporan content --}}
  <div class="px-5 py-5 flex flex-col gap-4 overflow-y-auto bg-blue-600">
    <h1 class="font-bold text-lg text-center text-white">Laporan Saya</h1>

    {{-- laporan history container --}}
    <div class="flex flex-col gap-3 mb-16">
      {{-- laporan detail --}}
      <div class="flex flex-col gap-4 bg-slate-100 rounded-md px-4 py-5">
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
          @include('dashboard.laporan.tabel')
        </div>

      </div>




    </div>
  </div>
</main>
@endsection
