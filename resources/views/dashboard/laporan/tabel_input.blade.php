<div class="relative overflow-x-auto">
  <form action="/dashboard/laporan" method="POST">
  @csrf
  <table class="w-full text-sm text-left text-dark-secondary bg-gray-100 rounded-lg">
      <tbody>
          <tr class="border-b-gray-200 border-b-[1px]">
              <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                  ID Input
              </th>
              <td class="px-6 py-2">
                <input type="text" name="id_laporan" value="{{ now()->format('ymd') . userActive()[0]->kode_toko. userActive()[0]->shift }}" class="laporan-input" readonly>
                @error('id_laporan')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
              </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Tanggal
            </th>
            <td class="px-6 py-3">
                <input type="text" class="laporan-input" value="{{ tanggal_indonesia(now()) }}" readonly>
            </td>
        </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Kode Toko
            </th>
            <td class="px-6 py-3">
              <input type="text" name="kode_toko" class="laporan-input" value="{{ userActive()[0]->kode_toko }}" readonly>
              @error('kode_toko')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Shift
            </th>
            <td class="px-6 py-3">
              <input type="text" name="shift" class="laporan-input" value="{{ userActive()[0]->shift }}" readonly>
              @error('shift')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Total Sales
            </th>
            <td class="px-6 py-3">
              <input type="text" name="input_aktual_kas" class="laporan-input" placeholder="Rp. " id="inputAktualKas" value="{{ old('input_aktual_kas') }}">
              @error('input_aktual_kas')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Tabungan
            </th>
            <td class="px-6 py-3">
              <input type="text" name="tabungan" class="laporan-input" id="tabungan" placeholder="Rp. ">
              @error('tabungan')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Aktual Kas
            </th>
            <td class="px-6 py-3">
              <input type="text" name="aktual_kas" class="laporan-input" id="aktualKas" placeholder="Rp. ">
              @error('aktual_kas')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </td>
          </tr>
        </tbody>
      </table>
      <button class="p-3 text-center w-full bg-green-500 rounded-lg text-white mt-3" type="submit">Buat Laporan</button>
  </form>
</div>
