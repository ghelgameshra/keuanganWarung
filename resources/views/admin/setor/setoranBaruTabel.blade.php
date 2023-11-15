<form action="/dashboard/setor" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="relative overflow-x-auto shadow-lg sm:rounded-lg rounded-lg py-3 bg-slate-50">
    <table class="w-full text-sm text-left text-dark-secondary dark:text-gray-400">
      <tbody>
        <tr class="border-b border-gray-200 dark:border-gray-700">
          <th scope="row"
            class="px-6 py-4 font-medium text-dark-secondary bg-gray-50 dark:text-white dark:bg-gray-800 whitespace-nowrap">
            Tanggal Setor
          </th>
          <td class="px-6 py-2 bg-gray-50 dark:text-white dark:bg-gray-800">
            <input type="text" value="{{ tanggal_indonesia( now() ) }}" class="laporan-input w-full" readonly>
          </td>
        </tr>

        <tr class="border-b border-gray-200 dark:border-gray-700">
          <th scope="row"
            class="px-6 py-4 font-medium text-dark-secondary bg-gray-50 dark:text-white dark:bg-gray-800 whitespace-nowrap">
            NIK Penyetor
          </th>
          <td class="px-6 py-2 bg-gray-50 dark:text-white dark:bg-gray-800">
            <input type="text" value="{{ auth()->user()->Karyawan->nik }}" class="laporan-input w-full" readonly>
          </td>
        </tr>

        <tr class="border-b border-gray-200 dark:border-gray-700">
          <th scope="row"
            class="px-6 py-4 font-medium text-dark-secondary bg-gray-50 dark:text-white dark:bg-gray-800 whitespace-nowrap">
            Nama Penyetor
          </th>
          <td class="px-6 py-2 bg-gray-50 dark:text-white dark:bg-gray-800">
            <input type="text" value="{{ auth()->user()->Karyawan->nama_karyawan }}" class="laporan-input w-full"
              readonly>
          </td>
        </tr>

        <tr class="border-b border-gray-200 dark:border-gray-700">
          <th scope="row"
            class="px-6 py-4 font-medium text-dark-secondary bg-gray-50 dark:text-white dark:bg-gray-800 flex items-center gap-2 whitespace-nowrap">
            @error('jenis_setor')
              <i class="fa-solid fa-triangle-exclamation text-red-500"></i>
            @enderror
            Jenis Setor
          </th>
          <td class="px-6 py-2 bg-gray-50 dark:text-white dark:bg-gray-800">
            <select name="jenis_setor" class="laporan-input sm:w-full">
              <option value="">Pilih...</option>
              @foreach($jenis_setor as $data)
                <option value="{{ $data->id }}">{{ $data->jenis_setor }}</option>
              @endforeach
            </select>
          </td>
        </tr>

        <tr class="border-b border-gray-200 dark:border-gray-700">
          <th scope="row"
            class="px-6 py-4 font-medium text-dark-secondary bg-gray-50 dark:text-white dark:bg-gray-800 flex items-center gap-2 whitespace-nowrap">
            @error('id_cabang')
              <i class="fa-solid fa-triangle-exclamation text-red-500"></i>
            @enderror
            Cabang
          </th>
          <td class="px-6 py-2 bg-gray-50 dark:text-white dark:bg-gray-800">
            <select name="id_cabang" class="laporan-input sm:w-full">
              <option value="">Pilih...</option>
              @foreach($cabang as $data)
                <option value="{{ $data->id }}">{{ $data->nama_cabang }}</option>
              @endforeach
            </select>
          </td>
        </tr>

        <tr class="border-b border-gray-200 dark:border-gray-700">
          <th scope="row"
            class="px-6 py-4 font-medium text-dark-secondary bg-gray-50 dark:text-white dark:bg-gray-800 flex items-center gap-2 whitespace-nowrap">
            @error('nominal_setor')
              <i class="fa-solid fa-triangle-exclamation text-red-500"></i>
            @enderror
            Nominal Setor
          </th>
          <td class="px-6 py-2 bg-gray-50 dark:text-white dark:bg-gray-800">
            <input type="text" name="nominal_setor" class="laporan-input w-full" placeholder="Rp. ">
          </td>
        </tr>

        <tr class="border-b border-gray-200 dark:border-gray-700">
          <th scope="row"
            class="px-6 py-4 font-medium text-dark-secondary bg-gray-50 dark:text-white dark:bg-gray-800 flex items-center gap-2 whitespace-nowrap">
            @error('nominal_setor')
              <i class="fa-solid fa-triangle-exclamation text-red-500"></i>
            @enderror
            Keterangan
          </th>
          <td class="px-6 py-2 bg-gray-50 dark:text-white dark:bg-gray-800">
            <textarea name="keterangan" rows="3" class="laporan-input w-full text-sm"
              placeholder="Boleh kosong. @error('keterangan') {{ $message }} @enderror"></textarea>
          </td>
        </tr>

        <tr>
          <th scope="row"
            class="px-6 py-4 font-medium text-dark-secondary bg-gray-50 dark:text-white dark:bg-gray-800 flex items-center gap-2 whitespace-nowrap">
            @error('bukti_setor')
              <i class="fa-solid fa-triangle-exclamation text-red-500"></i>
            @enderror
            Bukti Setor
          </th>
          <td class="px-6 py-2 bg-gray-50 dark:text-white dark:bg-gray-800">
            <div class="flex flex-col py-2">
              <input type="file" name="bukti_setor" class="">
              @error('bukti_setor')
                <small class="text-red-500">{{ $message }}</small>
              @enderror
            </div>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
  <button
    class="p-3 text-center w-full bg-green-400 rounded-lg text-white mt-3 flex justify-center items-center gap-2 font-bold mb-5"
    type="submit" onclick="return confirm('lanjut setor harian ?')">
    <i class="fa-regular fa-paper-plane"></i>
    Setor</button>
</form>
