<div class="relative overflow-x-auto shadow-lg sm:rounded-lg rounded-lg">
  <table class="w-full text-sm text-left text-dark-secondary dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
          NO
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-100">

        </th>
        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
          NOMOR INVOICE
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-100">
          JENIS
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
          CABANG
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-100">
          NOMINAL
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($setor as $data)
      <tr class="border-b border-gray-200 dark:border-gray-700">
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $loop->iteration }}
        </th>
        <td class="px-6 py-4 bg-gray-100">
          <a href="/dashboard/setor/{{ $data->invno }}" class="flex justify-center text-base">
            <i class="fa-regular fa-eye"></i>
          </a>
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $data->invno }}
        </th>
        <td class="px-6 py-4 whitespace-nowrap bg-gray-100">
          {{ $data->JenisSetor->jenis_setor }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $data->Cabang->nama_cabang }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap bg-gray-100">
          {{ "Rp. " . format_uang($data->nominal_setor) }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
