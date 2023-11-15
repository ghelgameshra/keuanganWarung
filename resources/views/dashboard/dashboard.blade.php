@extends('dashboard.partials.main')

@section('title')
  Monitoring | Dashboard
@endsection

@section('dashboard')
{{-- @dd(getAbsenTerakhir()) --}}
<main class="py-5 flex flex-col w-full sm:w-[600px] h-screen mx-auto bg-blue-600">

  <div class="px-10 flex items-center gap-2 text-white">
    <img src="{{ "/storage/" . auth()->user()->profile_photo_path }}" alt="" class="w-10 h-10 rounded-full">
    <small>{{ auth()->user()->Karyawan->kode_toko }}</small>
    <small>{{ auth()->user()->Karyawan->nik }}</small>
  </div>

  <header class="-mt-6 px-10 flex flex-col items-center gap-1 py-8 text-white text-center mx-auto">
    <h1 class="font-bold text-xl">Halo, {{ ucwords(strtolower(auth()->user()->Karyawan->nama_karyawan)) }}</h1>
    <h3 class="text-xs">{{ ucwords( strtolower(auth()->user()->Karyawan->Jabatan->nama_jabatan) ) }}</h3>
  </header>

  <aside class="text-dark-secondaryX flex flex-col gap-2 w-full justify-center px-10 py-10 bg-slate-50 rounded-t-[10%] text-white">
    @include('dashboard.partials.successModal')
    <form class="w-full" action="/absen" method="POST">
      @csrf
      <input type="hidden" name="nik" value="{{ auth()->user()->Karyawan->nik }}">
      <button class="bg-blue-400 py-3 flex gap-1 justify-center text-center items-center rounded-lg w-full" type="submit">
        <span>
          <i class="fa-solid fa-users-viewfinder"></i>
        </span>
        <h1 class="font-bold text-sm">Absen Datang</h1>
      </button>
    </form>

    <form class="w-full" action="{{ route('absen.update') }}" method="POST">
      @csrf
      @method('put')
      <button class="bg-red-400 py-3 flex gap-1 justify-center text-center items-center rounded-lg w-full">
        <span>
          <i class="fa-solid fa-users-rays"></i>
        </span>
        <h1 class="font-bold text-sm">Absen Pulang</h1>
      </button>
    </form>

    <a href="/absen" class="bg-green-400 py-3 rounded-lg text-center text-white flex justify-center items-center gap-1 text-sm">
      <i class="fa-solid fa-clock-rotate-left"></i>
      Riwayat Absensi</a>
  </aside>

  <div class="-mt-5 mx-auto text-center flex flex-col gap-3 text-dark-secondary py-16 bg-slate-50 w-full pb-52">
    <i class="fa-solid fa-code text-4xl animate-bounce"></i>
    <h1 class="font-light animate-typing animate-pulse">Aplikasi Masih Dalam Tahap Pengembangan</h1>
  </div>

</main>
@endsection
@push('successModal')
<script>
  $(document).ready(function(){
    let modal = $('#modalSuccess');
    let backdrop = $('#backdrop');
    let button1 = $('#closeModalIcon');
    let button2 = $('#closeModalTutup');
    modal.removeClass('hidden');


    if(!modal.hasClass('hidden')){
      backdrop.removeClass('hidden');
    } else {
      backdrop.addClass('hidden');
    }

    backdrop.on('click', function(){
      modal.addClass('hidden');
      backdrop.addClass('hidden');
    });

    button1.on('click', function(){
      modal.addClass('hidden');
      backdrop.addClass('hidden');
    });

    button2.on('click', function(){
      modal.addClass('hidden');
      backdrop.addClass('hidden');
    });
  })
</script>
@endpush
