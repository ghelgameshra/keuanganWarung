@extends('dashboard.partials.main')
@section('title')
  Laporan | Input
@endsection

@section('laporan')
<main class="relative w-full sm:w-[600px] h-screen mx-auto">
  {{-- laporan content --}}
  <div class="px-5 py-5 flex flex-col gap-4 overflow-y-auto bg-blue-600">
    <h1 class="font-bold text-lg text-center text-white">LAPORAN BARU</h1>

    {{-- laporan history container --}}
    <div class="flex flex-col gap-3 mb-16">
      {{-- laporan detail --}}
      <div class="flex flex-col gap-4 bg-white rounded-md px-4 py-5">


        <div>
          @include('dashboard.laporan.tabel_input')
        </div>

      </div>




    </div>
  </div>
</main>
@endsection
@push('inputAktualScript')
<script>
  let inputAktualKas = $('#inputAktualKas');
  let tabungan = $('#tabungan');
  let aktualKas = $('#aktualKas');

  inputAktualKas.on('keyup', function(){
    tabungan.val( inputAktualKas.val()*2.5/100 );
  });

  tabungan.on('keyup', function(){
    aktualKas.val( inputAktualKas.val()-tabungan.val() );
  });
</script>
@endpush
