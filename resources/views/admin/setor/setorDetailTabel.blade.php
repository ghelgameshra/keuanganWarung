<div class="relative overflow-x-auto shadow-lg sm:rounded-lg rounded-lg">
  <div class="mx-auto text-center py-10 flex flex-col gap-3 bg-gray-100">
    @if ($setoran->approve_atasan === 2)
    <i class="text-3xl fa-regular fa-circle-check text-green-500"></i>
    <p class="font-xs text-green-500">Diterima</p>
    @elseif($setoran->approve_atasan === 3)
    <i class="text-3xl fa-regular fa-circle-xmark text-red-500"></i>
    <p class="font-xs text-red-500">Ditolak</p>
    @elseif($setoran->approve_atasan === 1)
    <i class="text-3xl fa-solid fa-spinner text-yellow-500 animate-spin"></i>
    <p class="font-xs text-yellow-500">Dalam Pengecekan</p>
    @endif
  </div>
  <table class="w-full text-sm text-left text-dark-secondary dark:text-gray-400">
    <tbody>
      <tr class="border-b border-gray-200 dark:border-gray-700">
        <td class="px-6 py-4 bg-gray-100 whitespace-nowrap font-medium">
          No. Invoice
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $setoran->invno }}
        </th>
      </tr>

      <tr class="border-b border-gray-200 dark:border-gray-700">
        <td class="px-6 py-4 bg-gray-100 whitespace-nowrap font-medium">
          Tanggal Setor
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ tanggal_indonesia( $setoran->created_at ) }}
        </th>
      </tr>

      <tr class="border-b border-gray-200 dark:border-gray-700">
        <td class="px-6 py-4 bg-gray-100 whitespace-nowrap font-medium">
          Jam Setor
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $setoran->created_at->format('H:m:s') }}
        </th>
      </tr>

      <tr class="border-b border-gray-200 dark:border-gray-700">
        <td class="px-6 py-4 bg-gray-100 whitespace-nowrap font-medium">
          NIK Penyetor
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $setoran->Karyawan->nik }}
        </th>
      </tr>

      <tr class="border-b border-gray-200 dark:border-gray-700">
        <td class="px-6 py-4 bg-gray-100 whitespace-nowrap font-medium">
          Nama Penyetor
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $setoran->Karyawan->nama_karyawan }}
        </th>
      </tr>

      <tr class="border-b border-gray-200 dark:border-gray-700">
        <td class="px-6 py-4 bg-gray-100 whitespace-nowrap font-medium">
          Jenis Setor
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $setoran->JenisSetor->jenis_setor }}
        </th>
      </tr>

      <tr class="border-b border-gray-200 dark:border-gray-700">
        <td class="px-6 py-4 bg-gray-100 whitespace-nowrap font-medium">
          Cabang
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $setoran->Cabang->kode_cabang . "-" . $setoran->Cabang->nama_cabang }}
        </th>
      </tr>

      <tr class="border-b border-gray-200 dark:border-gray-700">
        <td class="px-6 py-4 bg-gray-100 whitespace-nowrap font-medium">
          Nominal Setor
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ "Rp. " . format_uang( $setoran->nominal_setor ) }}
        </th>
      </tr>

      @if ($setoran->keterangan != null)
      <tr class="border-b border-gray-200 dark:border-gray-700">
        <td class="px-6 py-4 bg-gray-100 whitespace-nowrap font-medium">
          Keterangan
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ $setoran->keterangan }}
        </th>
      </tr>
      @endif

      <tr class="border-b border-gray-200 dark:border-gray-700">
        <td class="px-6 py-4 bg-gray-100 whitespace-nowrap font-medium">
          Bukti Setor
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 bg-gray-50 dark:text-white dark:bg-gray-800">
          <a href="/storage/{{ $setoran->bukti_setor }}" class="p-2 bg-green-400 text-white rounded-lg">
            <i class="fa-regular fa-image"></i>
            Lihat
          </a>
        </th>
      </tr>

      <tr class="border-b border-gray-200 dark:border-gray-700">
        <td class="px-6 py-4 bg-gray-100 whitespace-nowrap font-medium">
          Approve
        </td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 bg-gray-50 dark:text-white dark:bg-gray-800">
          {{ ucwords( strtolower( $setoran->ApproveAtasan->jenis_approve ) ) }}
        </th>
      </tr>

    </tbody>
  </table>
</div>
