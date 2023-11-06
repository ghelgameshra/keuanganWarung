@php
    $tabungan = 0;
    $aktualKas = 0;
    $sales = 0;
@endphp

@foreach ($laporan as $data)
@php
  $tabungan += $data->tabungan;
  $aktualKas += $data->aktual_kas;
  $sales += $data->input_aktual_kas;
@endphp
@endforeach
<div class="relative overflow-x-auto shadow-lg sm:rounded-lg rounded-lg bg-gray-50">

  <div class="flex gap-7 py-5 mb-3 justify-center">
    <div class="text-center bg-dark-secondary py-3 px-2 rounded-lg text-white w-full">
      <p class="font-bold">TOTAL TABUNGAN</p>
      <h1>{{ "Rp. " . format_uang($tabungan) }}</h1>
    </div>

    <div class="text-center bg-dark-secondary py-3 px-2 rounded-lg text-white w-full">
      <p class="font-bold">TOTAL AKTUAL KAS</p>
      <h1>{{ "Rp. " . format_uang($aktualKas) }}</h1>
    </div>

    <div class="text-center bg-dark-secondary py-3 px-2 rounded-lg text-white w-full">
      <p class="font-bold">TOTAL SALES</p>
      <h1>{{ "Rp. " . format_uang($sales) }}</h1>
    </div>


  </div>

  <table class="w-full text-sm text-left text-dark-secondary dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
          NO
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-100">
          TANGGAL
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
          NOMOR INVOICE
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-100">
          KODE TOKO
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
          TABUNGAN
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-100">
          AKTUAL KAS
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
          TOTAL SALES
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($laporan as $data)
      <tr class="border-b border-gray-200 dark:border-gray-700">
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $loop->iteration }}
        </th>
        <td class="px-6 py-4 whitespace-nowrap bg-gray-100">
          {{ $data->created_at->format('Y-m-d') }}
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $data->id_laporan }}
        </th>
        <td class="px-6 py-4 whitespace-nowrap bg-gray-100">
          {{ $data->kode_toko }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ "Rp. " . format_uang( $data->tabungan ) }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap bg-gray-100">
          {{ "Rp. " . format_uang( $data->aktual_kas ) }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ "Rp. " . format_uang( $data->input_aktual_kas ) }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
