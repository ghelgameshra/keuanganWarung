@extends('dashboard.partials.main')
@section('title')
  Laporan | Approval
@endsection

@section('laporan')
<main class="relative w-full sm:w-[600px] h-screen mx-auto">
  {{-- laporan content --}}
  <div class="px-10 py-20 flex flex-col gap-4 overflow-y-auto">
    <h1 class="font-bold text-lg text-dark-secondary">Approval Laporan {{ $laporan->id_laporan }}</h1>

    {{-- laporan history container --}}
    <div class="flex flex-col gap-3">
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
