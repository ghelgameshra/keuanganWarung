@extends('dashboard.partials.main')
@section('title')
  Laporan | Approval
@endsection

@section('laporan')
<main class="relative w-full sm:w-[600px] h-screen mx-auto">
  {{-- laporan content --}}
  <div class="px-5 py-5 flex flex-col gap-4 overflow-y-auto bg-blue-600">
    <div class="text-white text-center">
      <h1 class="font-bold text-lg">APPROVAL LAPORAN</h1>
      <small>{{ $laporan->id_laporan }}</small>
    </div>

    {{-- laporan history container --}}
    <div class="flex flex-col gap-3 mb-16">
      {{-- laporan detail --}}
      <div class="flex flex-col gap-4 bg-white rounded-md px-4 py-5">


        <div>
          @include('admin.laporan.laporanFormEdit')
        </div>

      </div>




    </div>
  </div>
</main>
@endsection
