
<div class="relative overflow-x-auto">
  <table class="w-full text-sm text-left text-dark-secondary bg-gray-50">
      <tbody>
          <tr class="border-b-gray-200 border-b-[1px]">
              <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                  ID Input
              </th>
              <td class="px-6 py-3">
                  : {{ $laporan->id_laporan }}
              </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Tanggal
            </th>
            <td class="px-6 py-3">
                : {{ tanggal_indonesia($laporan->created_at) }}
            </td>
        </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Kode Toko
            </th>
            <td class="px-6 py-3">
                : {{ $laporan->kode_toko }}
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Shift
            </th>
            <td class="px-6 py-3">
                : {{ $laporan->shift }}
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Total Sales
            </th>
            <td class="px-6 py-3">
                : Rp. {{ format_uang($laporan->input_aktual_kas) }}
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Tabungan
            </th>
            <td class="px-6 py-3">
                : Rp. {{ format_uang($laporan->tabungan) }}
            </td>
          </tr>

          <tr class="border-b-gray-200 border-b-[1px]">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-gray-900">
                Aktual Kas
            </th>
            <td class="px-6 py-3">
                : Rp. {{ format_uang($laporan->aktual_kas) }}
            </td>
          </tr>
      </tbody>
  </table>
</div>
