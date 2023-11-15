@extends('dashboard.partials.main')
@section('title')
  Monitoring | Setoran {{ $setoran->invno }}
@endsection

@section('setoran')
<main class="relative w-full sm:w-[600px] h-screen mx-auto">
  {{-- setor content --}}
  <div class="px-5 py-5 flex flex-col gap-4 overflow-y-auto relative bg-blue-600">
    <div class="flex items-center">
      <div class="text-white mb-3 text-center mx-auto">
        <h1 class="font-bold text-lg mx-auto">DETAIL SETORAN</h1>
        <small>{{ $setoran->invno }}</small>
      </div>
    </div>
    <div class="mb-20">
      @include('admin.setor.setorDetailTabel')
    </div>
  </div>
</main>
@endsection

