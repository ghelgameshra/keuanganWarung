@extends('dashboard.partials.main')
@section('title')
  Monitoring | Laporan
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
      {{-- laporan history --}}
      @foreach ($laporan as $data)
      <div class="flex gap-4 items-center bg-white rounded-md px-4 py-5">
        <div class="text-2xl">
          @if ($data->approved === 'Y')
          <i class="fa-regular fa-circle-check text-green-500"></i>
          @elseif($data->approved === 'N')
          <i class="fa-regular fa-circle-xmark text-red-500"></i>
          @else
          <i class="fa-solid fa-spinner text-yellow-500 animate-spin"></i>
          @endif
        </div>

        <p>{{ $data->id_laporan }}</p>

        <div class="mx-auto">
          @if ($data->approved === 'Y')
          <p class="text-green-500 text-sm">Diterima</p>
          @elseif($data->approved === 'N')
          <p class="text-red-500 text-sm">Ditolak</p>
          @else
          <p class="text-yellow-500 text-sm">Dicek</p>
          @endif
        </div>

        <a href="/dashboard/laporan/{{ $data->id_laporan }}" class="text-2xl text-blue-500">
          <i class="fa-regular fa-eye"></i>
        </a>

      </div>
      @endforeach




    </div>
  </div>
</main>
@endsection
