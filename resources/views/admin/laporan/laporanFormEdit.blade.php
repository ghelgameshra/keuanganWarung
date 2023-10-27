<form action="/dashboard/laporan/{{ $laporan->id_laporan }}" method="POST">
  @csrf
  @method('put')
<div class="relative overflow-x-auto">
  <table class="w-full text-sm text-left text-dark-secondary bg-gray-100 rounded-lg">
      <tbody>
          <tr class="border-b-gray-200 border-b-[1px]">
              <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                  ID Input
              </th>
              <td class="px-6 py-2">
                <input type="text" name="id_laporan" value="{{ $laporan->id_laporan }}" class="laporan-input" readonly>
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
                <input type="text" class="laporan-input" value="{{ $laporan->created_at->format('H:m:s') }}" readonly>
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Kode Toko
            </th>
            <td class="px-6 py-3">
              <input type="text" name="kode_toko" class="laporan-input" value="{{ $laporan->kode_toko }}" readonly>
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Shift
            </th>
            <td class="px-6 py-3">
              <input type="text" name="shift" class="laporan-input" value="{{ $laporan->shift }}" readonly>
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Total Sales
            </th>
            <td class="px-6 py-3">
              <input type="text" name="input_aktual_kas" class="laporan-input" placeholder="Rp. " value="Rp. {{ format_uang($laporan->input_aktual_kas) }}" readonly>
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Tabungan
            </th>
            <td class="px-6 py-3">
              <input type="text" name="tabungan" class="laporan-input" value="Rp. {{ format_uang($laporan->tabungan) }}" readonly>
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Aktual Kas
            </th>
            <td class="px-6 py-3">
              <input type="text" name="aktual_kas" class="laporan-input" value="Rp. {{ format_uang($laporan->aktual_kas) }}" readonly>
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Tanggal Cek
            </th>
            <td class="px-6 py-3">
              <input type="text" name="checker" class="laporan-input" value="{{ tanggal_indonesia(now()) }}" readonly>
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Approve
            </th>
            <td class="px-6 py-3">
              <select name="approved" id="" class="laporan-input w-full">
                <option value="">Pilih</option>
                <option value="Y">Approve</option>
                <option value="N">Reject</option>
              </select>
              @error('approved')
                <small class="text-red-500">{{ $message }}</small>
              @enderror
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Alasan
            </th>
            <td class="px-6 py-3">
              <textarea name="alasan" cols="1" rows="3" class="laporan-input w-full text-sm"></textarea>
            </td>
          </tr>




          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Checker
            </th>
            <td class="px-6 py-3">
              <input type="text" name="checker" class="laporan-input" value="{{ userActive()[0]->nik }}" readonly>
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Nama
            </th>
            <td class="px-6 py-3">
              <input type="text" class="laporan-input" value="{{ userActive()[0]->nama_karyawan }}" readonly>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
    <div>
      <button class="p-3 text-center w-full bg-yellow-500 rounded-lg text-white mt-3" type="submit">Update Laporan</button>
      {{-- <button class="p-3 text-center w-full bg-yellow-500 rounded-lg text-white mt-3" type="submit" onclick="return confirm('lanjut proses update laporan ?')">Update Laporan</button> --}}
    </div>
</form>
