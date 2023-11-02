<div class="relative overflow-x-auto">
  <table class="w-full text-sm text-left text-dark-secondary bg-gray-100 rounded-lg">
    <tbody>
      <tr class="border-b-gray-200 border-b-[1px]">
        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
          ID Input
        </th>
        <td class="px-6 py-2">
          <input type="text" value="{{ $laporan->id_laporan }}" class="laporan-input" readonly>
        </td>
      </tr>

      <tr class="border-b-gray-200 border-b-[1px]">
        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
          Pimshift
        </th>
        <td class="px-6 py-2">
          <input type="text" value="{{ $laporan->Karyawan->nama_karyawan }}" class="laporan-input" readonly>
        </td>
      </tr>

      <tr class="border-b-gray-200 border-b-[1px]">
        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
          Tanggal Input
        </th>
        <td class="px-6 py-3">
          <input type="text" class="laporan-input" value="{{ tanggal_indonesia($laporan->created_at) }}" readonly>
        </td>
      </tr>

      <tr class="border-b-gray-200 border-b-[1px]">
        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
          Jam Input
        </th>
        <td class="px-6 py-3">
          <input type="text" class="laporan-input"
            value="{{ $laporan->created_at->format('H:m:s') }}" readonly>
        </td>
      </tr>

      <tr class="border-b-gray-200 border-b-[1px]">
        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
          Kode Toko
        </th>
        <td class="px-6 py-3">
          <input type="text" class="laporan-input" value="{{ $laporan->kode_toko }}" readonly>
        </td>
      </tr>

      <tr class="border-b-gray-200 border-b-[1px]">
        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
          Shift
        </th>
        <td class="px-6 py-3">
          <input type="text" class="laporan-input" value="{{ $laporan->shift }}" readonly>
        </td>
      </tr>

      <tr class="border-b-gray-200 border-b-[1px]">
        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
          Total Sales
        </th>
        <td class="px-6 py-3">
          <input type="text" class="laporan-input" placeholder="Rp. "
            value="Rp. {{ format_uang($laporan->input_aktual_kas) }}" readonly>
        </td>
      </tr>

      <tr class="border-b-gray-200 border-b-[1px]">
        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
          Tabungan
        </th>
        <td class="px-6 py-3">
          <input type="text" class="laporan-input" value="Rp. {{ format_uang($laporan->tabungan) }}" readonly>
        </td>
      </tr>

      <tr class="border-b-gray-200 border-b-[1px]">
        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
          Aktual Kas
        </th>
        <td class="px-6 py-3">
          <input type="text" class="laporan-input" value="Rp. {{ format_uang($laporan->aktual_kas) }}" readonly>
        </td>
      </tr>

      @if( $laporan->catatan != null )
        <tr class="border-b-gray-200 border-b-[1px]">
          <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
            Catatan
          </th>
          <td class="px-6 py-3">
            <input type="text" class="laporan-input" value="{{ $laporan->catatan }}" readonly>
          </td>
        </tr>
      @endif

      @if( $laporan->alasan != null )
        <tr class="border-b-gray-200 border-b-[1px]">
          <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
            Alasan
          </th>
          <td class="px-6 py-3">
            <p class="bg-white px-3 py-2 border border-gray-400 rounded-lg">{{ $laporan->alasan }}</p>
          </td>
        </tr>
      @endif

      @if($laporan->created_at != $laporan->updated_at)
        <tr class="border-b-gray-200 border-b-[1px]">
          <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
            Tanggal Cek
          </th>
          <td class="px-6 py-3">
            <input type="text" class="laporan-input" value="{{ tanggal_indonesia($laporan->updated_at) }}" readonly>
          </td>
        </tr>
      @endif

      @if( $laporan->checker_id != null )
        <tr class="border-b-gray-200 border-b-[1px]">
          <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
            Checker
          </th>
          <td class="px-6 py-3">

            <input type="text" class="laporan-input" value="{{ $laporan->Checker->nik }}" readonly>
          </td>
        </tr>

        <tr class="border-b-gray-200 border-b-[1px]">
          <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
            Nama
          </th>
          <td class="px-6 py-3">
            <input type="text" class="laporan-input" value="{{ $laporan->Checker->nama_karyawan }}" readonly>
          </td>
        </tr>
      @endif

    </tbody>
  </table>
</div>
