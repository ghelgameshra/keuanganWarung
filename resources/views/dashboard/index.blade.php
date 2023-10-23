@extends('dashboard.partials.main')

@section('title')
  Monitoring | Input Aktual Kas
@endsection

@section('dashboard')

  <div class="flex flex-col gap-5">
    {{-- info --}}
    <div class="flex flex-col gap-3">

      <div class="flex items-center justify-center shadow-sm w-full">
        <label class="rounded-l-md text-white border-y border-l py-2 px-3 text-base w-[35%] bg-gray-600 font-bold">
          <p>Tanggal</p>
        </label>
        <input type="text" class="rounded-r-md border-r border-y p-2 focus:ring-0 focus:outline-none w-[65%] bg-white" value="{{ tanggal_indonesia(now()) }}">
      </div>

      <div class="flex gap-3">

        <div class="flex items-center justify-center shadow-sm w-full">
          <label class="rounded-l-md text-white border-y border-l py-2 px-3 text-base w-[35%] bg-gray-600 font-bold">
            <p>Toko</p>
          </label>
          <input type="text" class="rounded-r-md border-r border-y p-2 focus:ring-0 focus:outline-none w-[65%] bg-white" value="TSBY">
        </div>

        <div class="flex items-center justify-center shadow-sm w-full">
          <label class="rounded-l-md text-white border-y border-l py-2 px-3 text-base w-[35%] bg-gray-600 font-bold">
            <p>Shift</p>
          </label>
          <input type="text" class="rounded-r-md border-r border-y p-2 focus:ring-0 focus:outline-none w-[65%] bg-white" value="1">
        </div>

      </div>


      <div class="flex items-center justify-center shadow-sm w-full">
        <label class="rounded-l-md text-white border-y border-l py-2 px-3 text-base w-[35%] bg-gray-600 font-bold">
          <p>Cabang</p>
        </label>
        <input type="text" class="rounded-r-md border-r border-y p-2 focus:ring-0 focus:outline-none w-[65%] bg-white" value="Malang">
      </div>


    </div>


    {{-- input form --}}
    <form action="/keuangan" method="POST" class="flex flex-col gap-3">

      <header class="text-center mb-8 text-xl font-bold text-gray-100">
        <h1>Input Aktual Kas</h1>
      </header>

      <div class="flex items-center justify-center shadow-sm w-full">
        <label for="email" class="rounded-l-md text-white border-y border-l py-2 px-3 text-base w-[35%] bg-gray-600 font-bold">
          <p>Pimshift</p>
          {{-- <i class="fa-solid fa-envelope"></i> --}}
        </label>
        <input id="pimshift" type="text" class="rounded-r-md border-r border-y p-2 focus:ring-0 focus:outline-none w-[65%]" name="pimshift" autocomplete="off" autofocus placeholder="" value="{{ old('pimshift') }}">
      </div>

      <div class="flex items-center justify-center shadow-sm w-full">
        <label for="email" class="rounded-l-md text-white border-y border-l py-2 px-3 text-base w-[35%] bg-gray-600 font-bold">
          <p>Aktual Kas</p>
          {{-- <i class="fa-solid fa-envelope"></i> --}}
        </label>
        <input id="aktualKas" type="text" class="rounded-r-md border-r border-y p-2 focus:ring-0 focus:outline-none w-[65%]" name="aktualKas" autocomplete="off" autofocus placeholder="Rp." value="{{ old('aktualKas') }}">
      </div>

      <div class="flex items-center justify-center shadow-sm w-full">
        <label for="email" class="rounded-l-md text-white border-y border-l py-2 px-3 text-base w-[35%] bg-gray-600 font-bold">
          <p>Tabungan</p>
          {{-- <i class="fa-solid fa-envelope"></i> --}}
        </label>
        <input id="tabungan" type="text" class="rounded-r-md border-r border-y p-2 focus:ring-0 focus:outline-none w-[65%]" name="tabungan" autocomplete="off" placeholder="Rp." value="{{ old('tabungan') }}">
      </div>

      <button class="bg-gray-600 p-4 rounded-md text-white font-bold mt-7">Proses</button>

    </form>
  </div>
@endsection
