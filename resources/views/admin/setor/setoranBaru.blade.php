@extends('dashboard.partials.main')
@section('title')
  Monitoring | Setor
@endsection

@section('setoran')
<main class="relative w-full sm:w-[600px] h-screen mx-auto">
  {{-- setor content --}}
  <div class="px-10 py-20 flex flex-col gap-4 overflow-y-auto relative">
    <div class="flex items-center">
      <h1 class="font-bold text-lg text-dark-secondary">SETORAN BARU</h1>
    </div>
    @include('admin.setor.setoranBaruTabel')
  </div>
</main>
@endsection

