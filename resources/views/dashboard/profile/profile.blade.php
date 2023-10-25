@extends('dashboard.partials.main')
@section('title')
  {{ auth()->user()->name }}
@endsection

@section('user_show')
<main class="page-initial flex flex-col gap-5">
  <div class="text-dark-secondary flex items-center gap-3">
    <img src="{{ "/storage/" . auth()->user()->profile_photo_path }}" alt="" class="w-14 h-14 rounded-full">
    <div>
      <h1 class="font-bold font-xl">{{ userActive()[0]->nama_karyawan }}</h1>
      <h2 class="text-sm">{{ userActive()[0]->nik . " | " . userActive()[0]->nama_jabatan }}</h2>
    </div>
  </div>

  <div class="text-dark-secondary py-3 border-gray-400 border-b-[1px]">
    <a href="/">
      <h3 class="font-bold">Akun</h3>      <div class="mt-3 flex">
        <div class="flex gap-3 items-center">
          <i class="fa-regular fa-user"></i>
          <p>Lihat Profil</p>
        </div>
        <i class="fa-solid fa-chevron-right ms-auto"></i>
      </div>
    </a>

    <a href="/">
      <div class="mt-3 flex">
        <div class="flex gap-3 items-center">
          <i class="fa-solid fa-arrows-rotate"></i>
          <p>Mutasi Karyawan</p>
        </div>
        <i class="fa-solid fa-chevron-right ms-auto"></i>
      </div>
    </a>
  </div>

  <div class="text-dark-secondary py-3 border-gray-400 border-b-[1px]">
    <h3 class="font-bold">Keamanan</h3>
    <div class="mt-3 flex">
      <div class="flex gap-3 items-center">
        <i class="fa-solid fa-lock"></i>
        <p>Ganti Password</p>
      </div>
      <i class="fa-solid fa-chevron-right ms-auto"></i>
    </div>
  </div>

  <div class="text-dark-secondary py-3 border-gray-400 border-b-[1px]">
    <h3 class="font-bold">Catatan</h3>
    <div class="mt-3 flex">
      <div class="flex gap-3 items-center">
        <i class="fa-regular fa-note-sticky"></i>
        <p>Note</p>
      </div>
      <i class="fa-solid fa-chevron-right ms-auto"></i>
    </div>
  </div>


  <a href="#" class="p-3 bg-red-300 rounded-lg font-bold text-center text-red-800 mt-auto" onclick="$('#logout-form').submit()">Logout</a>


</main>
@endsection
<form action="{{ route('logout') }}" method="post" hidden style="display: none" id="logout-form">
  @csrf
</form>



