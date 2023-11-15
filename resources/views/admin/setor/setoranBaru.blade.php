@extends('dashboard.partials.main')
@section('title')
  Monitoring | Setor
@endsection

@section('setoran')
<main class="relative w-full sm:w-[600px] h-screen mx-auto">
  {{-- setor content --}}
  <div class="px-5 py-5 flex flex-col gap-4 overflow-y-auto relative bg-blue-600">
    <div class="flex items-center text-white mx-auto">
      <h1 class="font-bold text-lg">SETORAN BARU</h1>
    </div>
    <div class="mb-20">
      @include('admin.setor.setoranBaruTabel')
    </div>
  </div>
</main>
@endsection

